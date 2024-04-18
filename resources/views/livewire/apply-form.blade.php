<div>
    <div class="flex items-center space-x-2 mb-7 aos-init">
        <span
            class="mt-2 text-sm font-semibold text-gray-900 line-through">{{ $symbol }}
            {{ number_format($product->specialPrice * $exchangeRate, 2) }}</span>
            <span
            class="text-2xl font-bold text-red-500">{{ $symbol }}
            {{ number_format($product->price * $exchangeRate, 2) }}</span>
    </div>

    <form wire:submit.prevent="submit" class="mb-[30px]">
        <div class="w-full flex items-center h-[50px] space-x-[10px] mb-3 aos-init">
            <div
                class="flex items-center flex-1 h-full pl-4 space-x-2 text-black bg-white border border-gray-300 focus-within:text-yellow-400">
                <span>
                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
                        <path
                            d="M8 2C6.347656 2 5 3.347656 5 5C5 6.652344 6.347656 8 8 8C9.652344 8 11 6.652344 11 5C11 3.347656 9.652344 2 8 2 Z M 8 8C5.246094 8 3 10.246094 3 13L4 13C4 10.785156 5.785156 9 8 9C10.214844 9 12 10.785156 12 13L13 13C13 10.246094 10.753906 8 8 8 Z M 8 3C9.109375 3 10 3.890625 10 5C10 6.109375 9.109375 7 8 7C6.890625 7 6 6.109375 6 5C6 3.890625 6.890625 3 8 3Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" wire:model="name"
                    class="w-full h-full text-sm tracking-wider text-black focus:outline-none placeholder:text-xs placeholder:text-black font-400"
                    placeholder="ENTER YOUR NAME HERE">

            </div>
        </div>
        @error('name')
            <div class="flex w-full mb-3 -mt-2 text-sm text-red-600">
                {{ $message }}
            </div>
        @enderror

        <div class="w-full flex items-center h-[50px] space-x-[10px] mb-3 aos-init">
            <div
                class="flex items-center flex-1 h-full pl-4 space-x-2 text-black bg-white border border-gray-300 focus-within:text-yellow-400">
                <span>
                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path
                            d="M11.839844 2.988281C11.070313 2.925781 10.214844 3.148438 9.425781 3.703125C8.730469 4.1875 7.230469 5.378906 5.828125 6.726563C5.128906 7.398438 4.460938 8.097656 3.945313 8.785156C3.425781 9.472656 2.972656 10.101563 3 11.015625C3.027344 11.835938 3.109375 14.261719 4.855469 17.980469C6.601563 21.695313 9.988281 26.792969 16.59375 33.402344C23.203125 40.011719 28.300781 43.398438 32.015625 45.144531C35.730469 46.890625 38.160156 46.972656 38.980469 47C39.890625 47.027344 40.519531 46.574219 41.207031 46.054688C41.894531 45.535156 42.59375 44.871094 43.265625 44.171875C44.609375 42.769531 45.800781 41.269531 46.285156 40.574219C47.390625 39 47.207031 37.140625 45.976563 36.277344C45.203125 35.734375 38.089844 31 37.019531 30.34375C35.933594 29.679688 34.683594 29.980469 33.566406 30.570313C32.6875 31.035156 30.308594 32.398438 29.628906 32.789063C29.117188 32.464844 27.175781 31.171875 23 26.996094C18.820313 22.820313 17.53125 20.878906 17.207031 20.367188C17.597656 19.6875 18.957031 17.320313 19.425781 16.425781C20.011719 15.3125 20.339844 14.050781 19.640625 12.957031C19.347656 12.492188 18.015625 10.464844 16.671875 8.429688C15.324219 6.394531 14.046875 4.464844 13.714844 4.003906L13.714844 4C13.28125 3.402344 12.605469 3.050781 11.839844 2.988281 Z M 11.65625 5.03125C11.929688 5.066406 12.09375 5.175781 12.09375 5.175781C12.253906 5.398438 13.65625 7.5 15 9.53125C16.34375 11.566406 17.714844 13.652344 17.953125 14.03125C17.992188 14.089844 18.046875 14.753906 17.65625 15.492188L17.65625 15.496094C17.214844 16.335938 15.15625 19.933594 15.15625 19.933594L14.871094 20.4375L15.164063 20.9375C15.164063 20.9375 16.699219 23.527344 21.582031 28.410156C26.46875 33.292969 29.058594 34.832031 29.058594 34.832031L29.558594 35.125L30.0625 34.839844C30.0625 34.839844 33.652344 32.785156 34.5 32.339844C35.238281 31.953125 35.902344 32.003906 35.980469 32.050781C36.671875 32.476563 44.355469 37.582031 44.828125 37.914063C44.84375 37.925781 45.261719 38.558594 44.652344 39.425781L44.648438 39.425781C44.28125 39.953125 43.078125 41.480469 41.824219 42.785156C41.195313 43.4375 40.550781 44.046875 40.003906 44.457031C39.457031 44.867188 38.96875 44.996094 39.046875 45C38.195313 44.972656 36.316406 44.953125 32.867188 43.332031C29.417969 41.714844 24.496094 38.476563 18.007813 31.984375C11.523438 25.5 8.285156 20.578125 6.664063 17.125C5.046875 13.675781 5.027344 11.796875 5 10.949219C5.003906 11.027344 5.132813 10.535156 5.542969 9.988281C5.953125 9.441406 6.558594 8.792969 7.210938 8.164063C8.519531 6.910156 10.042969 5.707031 10.570313 5.339844L10.570313 5.34375C11.003906 5.039063 11.382813 5 11.65625 5.03125Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" wire:model="phone_number"
                    class="w-full h-full text-sm tracking-wider text-black focus:outline-none placeholder:text-xs placeholder:text-black font-400"
                    placeholder="ENTER YOUR PHONE NUMBER">
            </div>

        </div>
        @error('phone_number')
            <div class="flex w-full mb-3 -mt-2 text-sm text-red-600">
                {{ $message }}
            </div>
        @enderror
        <div class="w-full flex items-center h-[50px] space-x-[10px] mb-3 aos-init">
            <div
                class="flex items-center flex-1 h-full pl-4 space-x-2 text-black bg-white border border-gray-300 focus-within:text-yellow-400">
                <span>
                    <svg width="18" height="18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path
                            d="M25 2C17.832031 2 12 7.832031 12 15C12 20.078125 15.105469 26.347656 18.140625 31.492188C21.171875 36.636719 24.203125 40.609375 24.203125 40.609375L25 41.644531L25.796875 40.609375C25.796875 40.609375 28.828125 36.636719 31.859375 31.492188C34.894531 26.347656 38 20.078125 38 15C38 7.832031 32.167969 2 25 2 Z M 25 4C31.085938 4 36 8.914063 36 15C36 19.214844 33.105469 25.445313 30.140625 30.476563C27.570313 34.832031 25.644531 37.339844 25 38.199219C24.355469 37.339844 22.429688 34.832031 19.859375 30.476563C16.894531 25.445313 14 19.214844 14 15C14 8.914063 18.914063 4 25 4 Z M 25 10C22.25 10 20 12.25 20 15C20 17.75 22.25 20 25 20C27.75 20 30 17.75 30 15C30 12.25 27.75 10 25 10 Z M 25 12C26.667969 12 28 13.332031 28 15C28 16.667969 26.667969 18 25 18C23.332031 18 22 16.667969 22 15C22 13.332031 23.332031 12 25 12 Z M 7.296875 32L1.578125 48L48.421875 48L42.703125 32L35.050781 32C34.660156 32.6875 34.269531 33.355469 33.878906 34L41.296875 34L45.578125 46L4.421875 46L8.703125 34L16.121094 34C15.730469 33.355469 15.339844 32.6875 14.949219 32Z"
                            fill="currentColor" />
                    </svg>
                </span>
                <input type="text" wire:model="address"
                    class="w-full h-full text-sm tracking-wider text-black focus:outline-none placeholder:text-xs placeholder:text-black font-400"
                    placeholder="ENTER YOUR ADDRESS">
            </div>
        </div>
        @error('address')
            <div class="flex w-full mb-3 -mt-2 text-sm text-red-600">
                {{ $message }}
            </div>
        @enderror
        <div class=" w-full flex items-center h-[50px] space-x-[10px] mb-[20px] aos-init">
            <div class="w-[120px] h-full px-[26px] flex items-center border border-gray-500">
                <div class="flex items-center justify-between w-full">
                    <button type="button" class="text-base text-gray-700 " wire:click="decrement">-</button>
                    <span class="text-qblack">{{ $quantity }}</span>
                    <button type="button" class="text-base text-gray-700 " wire:click="increment">+</button>
                </div>
            </div>

            <div class="flex-1 h-full"><button type="submit"
                    class="w-full h-full text-sm font-semibold text-white bg-green-500">Buy it
                    now</button>
            </div>
        </div>
    </form>
</div>
