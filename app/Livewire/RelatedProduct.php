<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class RelatedProduct extends Component
{
    public function render()
    {
        $products=Product::all();
        return view('livewire.related-product',['products'=>$products]);
    }
}
