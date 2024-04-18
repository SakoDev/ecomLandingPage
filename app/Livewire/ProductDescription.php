<?php

namespace App\Livewire;

use Livewire\Component;

class ProductDescription extends Component
{
    public $description, $product;
    public $renderForm = false;

    public function mount($product)
    {
        $this->product = $product;
        $description = $product->description;
        // Check if description contains the special string
        if (strpos($description, '<!--Form-->') !== false) {
            $this->renderForm = true;
            // Optional: Remove the marker or replace it with a placeholder that can be targeted in the Blade file.
           // $this->description = str_replace('<!--Form-->', '', $description);
           $this->description = $description;
        } else {
            $this->description = $description;
        }
    }
    public function render()
    {
        return view('livewire.product-description');
    }
}
