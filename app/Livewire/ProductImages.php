<?php

namespace App\Livewire;

use Livewire\Component;

class ProductImages extends Component
{
    public $product;
    public $selectedImage;

    public function mount($product)
    {
        $this->product = $product;
        $this->selectedImage = asset('storage/' . str_replace('\\', '/', $product->getPrincipalImage()));
    }

    public function changeImage($imagePath)
    {
        $this->selectedImage = $imagePath;
    }

    public function render()
    {
        return view('livewire.product-images');
    }
}
