<?php

namespace App\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class TrackingOrder extends Component
{
    public $orderNumber, $phoneNumber, $tracking_list = [];

    protected $statusMap = [
        "New" => "Order placed",
        "Confirmed" => "Confirmed",
        "Codsented" => "Shipped",
        "Delivered" => "Delivered",
        "Cancelled" => "Order cancelled",
        "Refunded" => "The order has been refunded"
    ];

    protected $statusStages = [
        "New" => 1,
        "Confirmed" => 2,
        "Codsented" => 3,
        "Delivered" => 4,
    ];

    public function checkOrder()
    {
        // Check if the user is banned
        if (Session::has('banned') && Session::get('banned')) {
            abort(404);
        }
        $this->validate([
            'orderNumber' => 'required|string|exists:orders,tracking_number',
            'phoneNumber' => 'required|digits:4',
        ]);

        $lastFourDigits = substr($this->phoneNumber, -4);

        $attempts = Session::get('attempts', 0);

        $order_detail =  Order::where('tracking_number', $this->orderNumber)
            ->whereRaw('RIGHT(phone_number, 4) = ?', [$lastFourDigits])
            ->with('product') // Assuming there is a relationship named 'product'
            ->first();

        $this->resetValidation();

        if ($order_detail) {
            $this->tracking_list = [
                'order_id' => $order_detail->id,
                'order_quantity' => $order_detail->quantity,
                'order_tracking_number' => $order_detail->tracking_number,
                'order_created_at' => $order_detail->created_at->format('F d, Y'),
                'product_name' => $order_detail->product->name,
                'product_price' => $order_detail->product->price,
                'product_description' => $order_detail->product->description,
                'product_image' => $order_detail->product->getPrincipalImage(),
                'delivery_name' => $order_detail->name,
                'delivery_address' => $order_detail->address,
                'delivery_city' => $order_detail->city,
                'delivery_country' => $order_detail->country,
                'phone_number' => $this->maskPhoneNumber($order_detail->phone_number),
                'order_status' => $this->statusMap[$order_detail->status] ?? 'Unknown status',
                'order_stage' => $this->statusStages[$order_detail->status] ?? 0,
                'updated_at' => $order_detail->updated_at->format('F d, Y')
            ];
             // Reset the attempts if order is found
            Session::put('attempts', 0);
        } else {
            $this->tracking_list = [];
            $attempts++;
            Session::put('attempts', $attempts);
            // Ban the user after 6 failed attempts
            if ($attempts >= 6) {
                Session::put('banned', true);
                abort(404);
            }
        }
    }

    public function maskPhoneNumber($phoneNumber)
    {
        return substr($phoneNumber, 0, 1) . '****' . substr($phoneNumber, -4);
    }

    public function render()
    {
        return view('livewire.tracking-order');
    }
}
