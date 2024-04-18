<?php

namespace App\Livewire;

use App\Models\Currency;
use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;

class ApplyForm extends Component
{
    public $product, $quantity = 1, $name, $phone_number, $address, $selectedCurrency;
    public $symbol = '$', $exchangeRate = 1;

    public function mount($product)
    {
        $this->fetchExchangeRate();
        $this->product = $product;
    }

    #[On('renderComponent')]
    public function renderComponent($componentName, $product)
    {
        dd('disptshed');
        if ($componentName === 'apply-form') {
            $this->product = $product;
            $this->fetchExchangeRate();
            $this->render();
        }
    }

    #[On('currencyChanged')]
    public function fetchExchangeRate()
    {
        try {
            $this->selectedCurrency = session()->get('currency', 'USD');
            $cacheKey = "currency_rate_{$this->selectedCurrency}";
            $currency = cache()->remember($cacheKey, 3600, function () {
                return Currency::where('code', $this->selectedCurrency)->firstOrFail();
            });

            $this->exchangeRate = $currency->exchange_rate;
            $this->symbol = $currency->symbol;
        } catch (\Exception $e) {
            $this->exchangeRate = 1;
            $this->symbol = '$';
            logger()->error("Failed to fetch currency: " . $e->getMessage());
        }
    }


    public function increment()
    {
        $this->quantity++;
    }

    public function decrement()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function submit()
    {
        // Validate the input
        $this->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'address' => 'required|min:7',
            'quantity' => 'required|numeric|min:1'
        ]);
        $tracking_number = 'TRK' . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
        $order = Order::create([
            'product_id' => $this->product->id,
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'quantity' => $this->quantity,
            'tracking_number' => $tracking_number,
        ]);
        if ($order) {
            session()->flash('message', 'Order placed successfully!');
            $this->reset();
            return redirect()->route('thanks-page', ['tracking_number' => $order->tracking_number]);
        }
    }


    public function render()
    {
        return view('livewire.apply-form');
    }
}
