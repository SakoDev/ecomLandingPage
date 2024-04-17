<div>
    <a href="{{ route('single-product',$product->slug) }}">
        <div class="item aos-init">
            <div class="relative w-full h-full overflow-hidden bg-white product-card-one group"
                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 15px 64px 0px;">
                <div class="product-card-img w-full h-[250px] "
                    style="background-size: contain;background-position: center;background-repeat: no-repeat;
                    background-image: url('{{ asset('storage/' . str_replace('\\', '/', $product->getPrincipalImage())) }}') ;">
                </div>
                <div class=" px-[30px] pt-[20px] pb-[10px] relative">
                    <div class="reviews flex space-x-[1px] mb-2">
                        @for ($i = 0; $i < $randomNumber; $i++)
                            <span>
                                <svg width="18" height="17" viewBox="0 0 18 17"
                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                        fill="#FFA800"></path>
                                </svg>
                            </span>
                        @endfor
                    </div>

                    <p
                        class="title mb-1 text-[15px] font-semibold text-qblack leading-[24px] line-clamp-2 hover:text-blue-600">
                        {{ $product->name }}
                    </p>

                    <p class="price"><span
                            class="main-price text-gray-500 line-through font-semibold text-[18px]">{{ $symbol }} {{ number_format($product->specialPrice * $exchangeRate, 2) }}</span><span
                            class="offer-price text-red-600 font-bold text-[21px] ml-2">{{ $symbol }} {{ number_format($product->price * $exchangeRate, 2) }}</span>
                    </p>
                </div>
                <div class=" w-full h-10 px-[30px] mb-4 text-center transition-all duration-300 ease-in-out">
                    <button type="button" class="flex items-center justify-center w-full h-full text-xs font-semibold bg-yellow-500">
                        <div class="flex items-center space-x-3 text-[18px] ">
                            Buy now
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </a>
</div>
