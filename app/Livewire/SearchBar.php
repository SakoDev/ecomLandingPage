<?php

namespace App\Livewire;

use App\Models\Currency;
use App\Models\Product;
use Livewire\Attributes\On;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = '';
    public $products = [];
    public $selectedCurrency, $exchangeRate, $symbol;

    protected $queryString = [
        'search'
    ];

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

    public function updatedSearch()
    {
        if (strlen($this->search) > 1) {

            $this->products = Product::where('name', 'like', '%' . $this->search . '%')
                ->orWhere('description', 'like', '%' . $this->search . '%')
                ->limit(5)
                ->get();
                $this->fetchExchangeRate();
        }
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
