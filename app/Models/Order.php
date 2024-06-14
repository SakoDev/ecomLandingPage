<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone_number',
        'address',
        'quantity',
        'tracking_number',
        'product_id',
        'subtotal'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
