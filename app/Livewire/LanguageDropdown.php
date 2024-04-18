<?php

namespace App\Livewire;

use Illuminate\Routing\Route;
use Illuminate\Support\Facades\App;
use Livewire\Component;

class LanguageDropdown extends Component
{
    public $currentLocale;

    public function mount()
    {
        $this->currentLocale = App::getLocale();
    }

    public function changeLocale($locale)
    {
        $supportedLocales = ['en', 'ar', 'fr'];
        
        if (in_array($locale, $supportedLocales)) {
            $this->redirect('/lang/', $locale, $navigate = true);
        }
    }

    public function render()
    {
        return view('livewire.language-dropdown');
    }
}
