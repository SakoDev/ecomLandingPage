<?php

namespace App\Livewire;

use App\Models\Currency;
use Livewire\Attributes\On;
use Livewire\Component;
use Nette\Utils\Random;

class ProductCard extends Component
{

    public $product;
    public $randomNumber;
    public $selectedCurrency, $exchangeRate, $symbol;
    
    public function mount($product)
    {
        $this->randomNumber = rand(4, 5); 
        $this->product = $product;
        $this->fetchExchangeRate();
    }
    
    #[On('currencyChanged')]
    public function fetchExchangeRate()
    {
        $this->selectedCurrency = session()->get('currency', 'USD');
        $currency = Currency::where('code', $this->selectedCurrency)->first();

        if ($currency) {
            $this->exchangeRate = $currency->exchange_rate;
            $this->symbol = $currency->symbol;
        } else {
            
            $this->exchangeRate = 1; 
            $this->symbol = '$'; 
        }
    }


    public function render()
    {
        return view('livewire.product-card');
    }
}
