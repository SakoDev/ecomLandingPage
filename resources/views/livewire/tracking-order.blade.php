<div>
    <div class="w-full mb-10 content-wrapper">
        <div class="mx-auto max-w-7xl">
            <h1 class="text-2xl font-semibold leading-9 text-gray-800">Track Your Order</h1>
            <p class="mb-5 text-sm leading-8 text-gray-600">Enter your order tracking number and your secret ID.</p>
            @if (empty($tracking_list))
                <div class="items-center w-full px-4 py-6 bg-white lg:px-8 lg:flex">
                    <div class="w-full lg:w-2/3">
                        <div class="mb-3">
                            <div class="w-full h-full">
                                <label class="block mb-2 text-sm font-normal text-gray-600 capitalize">Order Tracking
                                    Number*</label>
                                <div class="relative w-full h-full overflow-hidden border border-gray-300 input-wrapper">
                                    <input placeholder="Order Number" wire:model='orderNumber'
                                        class="w-full h-12 px-6 text-sm font-normal text-gray-700 bg-white placeholder:text-sm focus:ring-0 focus:outline-none"
                                        value="">
                                </div>
                                @error('orderNumber')
                                    <div class="flex w-full mt-2 mb-3 text-sm text-red-600">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-8">
                            <div class="w-full h-full">
                                <label class="block mb-2 text-sm font-normal text-gray-600 capitalize">Phone number
                                    (last 4 digits)</label>
                                <div
                                    class="relative w-full h-full overflow-hidden border border-gray-300 input-wrapper">
                                    <input placeholder="__________xxxx" wire:model='phoneNumber'
                                        class="w-full h-12 px-6 text-sm font-normal text-gray-700 bg-white placeholder:text-sm focus:ring-0 focus:outline-none"
                                        value="">
                                </div>
                                @error('phoneNumber')
                                    <div class="flex w-full mt-2 mb-3 text-sm text-red-600">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <button wire:click='checkOrder'
                            class="flex items-center justify-center h-12 text-white bg-black w-36">
                            <span>Track Now</span>
                        </button>
                    </div>
                    <div class="flex justify-center flex-1 w-full mt-5 lg:mt-0">
                        {{-- //icon tracking number --}}
                    </div>
                </div>
            @else
                <div class="w-full p-5 mx-auto">
                    <h1 class="mb-2 text-xl font-semibold text-gray-800">Order Details</h1>
                    <div class="mb-6 text-sm text-gray-600">
                        <span class="font-semibold">Order number</span> {{ $tracking_list['order_tracking_number'] }} ·
                        {{ \Carbon\Carbon::parse($tracking_list['order_created_at'])->format('F d, Y') }}
                    </div>
                    <div class="flex flex-col p-6 bg-white rounded-lg shadow-lg md:flex-row">
                        <div class="w-full md:w-1/3">
                            <img src="{{ asset('storage/' . $tracking_list['product_image']) }}"
                                alt="{{ $tracking_list['product_name'] }}" class="rounded-lg">
                        </div>
                        <div class="w-full mt-4 md:w-2/3 md:pl-6 md:mt-0">
                            <h2 class="text-lg font-semibold text-gray-800">{{ $tracking_list['product_name'] }}</h2>
                            <p class="mb-4 text-lg text-gray-600">${{ $tracking_list['product_price'] }}</p>
                            <div class="flex justify-between mb-4">
                                <div class="flex-1">
                                    <h3 class="text-sm font-semibold text-gray-800">Delivery address</h3>
                                    <p class="text-sm text-gray-600">{{ $tracking_list['delivery_name'] }}</p>
                                    <p class="text-sm text-gray-600">{{ $tracking_list['delivery_address'] }}</p>
                                    <p class="text-sm text-gray-600">{{ $tracking_list['delivery_city'] }},
                                        {{ $tracking_list['delivery_country'] }}</p>
                                    <p class="text-sm text-gray-600">{{ $tracking_list['phone_number'] }}</p>
                                </div>
                            </div>
                            <div class="pt-4 border-t">
                                <p class="mb-4 text-sm text-gray-600">Order Status: {{ $tracking_list['order_status'] }}</p>
                                @if ($tracking_list['order_status'] !== 'Order cancelled' && $tracking_list['order_status'] !== 'The order has been refunded')
                                    <div class="relative pt-1">
                                        <div class="flex items-center justify-between mb-2">
                                            <div>
                                                <span class="inline-block px-2 py-1 text-xs font-semibold text-purple-600 uppercase bg-purple-200 rounded-full">
                                                    {{ $tracking_list['order_status'] }}
                                                </span>
                                            </div>
                                            <div class="text-right">
                                                <span class="inline-block text-xs font-semibold text-purple-600">
                                                    {{ $tracking_list['order_status'] }}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="flex h-2 mb-4 overflow-hidden text-xs bg-purple-200 rounded">
                                            <div style="width: {{ ($tracking_list['order_stage'] / 4) * 100 }}%" class="flex flex-col justify-center text-center text-white bg-purple-600 shadow-none whitespace-nowrap">
                                            </div>
                                        </div>
                                        <div class="flex justify-between text-xs text-gray-600">
                                            <span>Order placed</span>
                                            <span>Confirmed</span>
                                            <span>Shipped</span>
                                            <span>Delivered</span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
