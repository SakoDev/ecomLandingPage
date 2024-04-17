<div>
    <div class="hidden topbar-dropdowns sm:block">
        <div class="flex space-x-6">
            <div x-data="{ open: false }" @click.away="open = false"
                class="relative flex items-center space-x-1 currency-select">
                <div class="my-select-box w-fit">
                    <button type="button" @click="open = !open" class="my-select-box-btn">
                        <span>{{ $selectedCurrency }}</span>
                    </button>
                    <div x-show="open" class="absolute right-0 left-auto z-50 mt-1 bg-white rounded-md shadow-md w-[120px]">
                        <ul class="list">
                            @foreach ($currencies as $currency)
                                <li wire:click="switchCurrency('{{ $currency->code }}'); open = false"
                                    class="cursor-pointer px-4 py-2 hover:bg-gray-100 {{ $selectedCurrency == $currency->code ? 'bg-gray-100' : '' }}">
                                    {{ $currency->code }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <svg :class="{ 'rotate-180': open }" class="w-4 h-4 ml-2 transform fill-current"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </div>
</div>
