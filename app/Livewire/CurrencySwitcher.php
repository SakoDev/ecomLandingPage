<?php

namespace App\Livewire;

use App\Models\Currency;
use Livewire\Component;

class CurrencySwitcher extends Component
{
    public $currencies;
    public $selectedCurrency;

    public function mount()
    {
        $this->currencies = Currency::all();
        $countryCode = session('user_country','US'); 
        $currency  = $this->currencies->where('country_code',$countryCode)->first();
        $this->selectedCurrency = $currency ? $currency->code : 'USD';
        session()->put('currency', $this->selectedCurrency);
    }

    public function switchCurrency($currencyCode)
    {
        session()->put('currency', $currencyCode);
        $this->selectedCurrency = $currencyCode;
        $this->dispatch('currencyChanged', $currencyCode);
    }
    public function render()
    {
        return view('livewire.currency-switcher');
    }
}
