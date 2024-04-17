<div>
    <div class="w-full h-[86px] bg-white quomodo-shop-middle-bar lg:block hidden">
        <div class="max-w-[1216px] mx-auto h-full">
            <div class="relative h-full">
                <div class="flex items-center justify-between h-full">
                    <div><a href="/"><img width="152" height="36"
                                src="{{ asset('storage/' . setting('site.logo')) }}" alt="logo"></a>
                    </div>
                    <div class="w-[517px] h-[44px]">
                        <div class="flex items-center w-full h-full bg-white border border-qgray-border search-com">
                            <input wire:model.live="search" type="text"
                                class="w-full h-full pl-5 text-xs font-medium leading-4"
                                placeholder="Search Product...">
                            <button class="w-[93px] h-full text-sm font-semibold search-btn" type="button"
                                wire:click="searchProduct">Search</button>
                        </div>
                        @if (count($products) > 0 && strlen($search) > 2)
                            <div class="absolute w-[400px] bg-white shadow-lg p-[10px]">
                                <ul>
                                    @foreach ($products as $product)
                                        <li>
                                            <a href="{{ route('single-product', $product->slug) }}">
                                                <div data-aos="fade-up"
                                                    class="w-full product-card-row-two aos-init aos-animate">
                                                    <div
                                                        class="w-full h-[105px] bg-white border border-primarygray px-5 ">
                                                        <div
                                                            class="flex items-center justify-center w-full h-full space-x-5">
                                                            <div class="w-[75px] h-[75px]"><img
                                                                    src="{{ asset('storage/'.$product->getPrincipalImage()) }}"
                                                                    alt="" class="object-cover w-full h-full">
                                                            </div>
                                                            <div class="flex flex-col justify-center flex-1 h-full ">
                                                                <p class="title mb-2 sm:text-[15px] text-[13px] font-semibold text-qblack leading-[24px] line-clamp-1 hover:text-blue-600">
                                                                    {{$product->name}}</p>
                                                                <p class="price"><span
                                                                    class="main-price text-gray-700 line-through font-semibold text-[18px]">{{ $symbol }} {{ number_format($product->specialPrice * $exchangeRate, 2) }}</span><span
                                                                    class="offer-price text-red-700 font-semibold text-[18px] ml-2">{{ $symbol }} {{ number_format($product->price * $exchangeRate, 2) }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif ($search)
                            <div class="absolute w-[400px] bg-white shadow-lg p-[10px] ">
                                <ul>
                                    <li>No products found</li>
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
