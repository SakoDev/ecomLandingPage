<div>
    <!-- resources/views/livewire/language-dropdown.blade.php -->

    <div x-data="{ open: false }" @click.away="open = false" class="relative">
        <button @click="open = !open" class="flex items-center space-x-1">
            <span>{{ strtoupper($currentLocale) }}</span>
            <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 12a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                <path fill-rule="evenodd" d="M10 20a10 10 0 100-20 10 10 0 000 20zM0 10a10 10 0 0120 0 10 10 0 01-20 0z"
                    clip-rule="evenodd" />
            </svg>
        </button>

        <ul x-show="open" class="absolute right-0 z-50 mt-2 bg-white rounded-md shadow-lg">
            @foreach (['en', 'fr', 'ar'] as $locale)
                <li>
                    <button wire:click="changeLocale('{{ $locale }}')" @click="open = !open"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                        {{ strtoupper($locale) }}
                    </button>
                </li>
            @endforeach
        </ul>
    </div>

</div>
