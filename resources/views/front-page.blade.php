@extends('layouts.store')

@section('title', 'Home Page')

@section('content')
    <div class="w-full  pt-[30px] pb-[60px]">
        <div class="w-5 h-5 btn "></div>
        <div class="w-full banner-wrapper my-[60px]">
            <div class="max-w-[1216px] mx-auto">
                <div class="w-full main-wrapper">
                    <div class="banner-card xl:flex xl:space-x-[30px] xl:h-[600px]  mb-[30px]">
                        <div data-aos="fade-right" class="xl:w-[740px] w-full h-full aos-init aos-animate">
                            <a href="/single-product">
                                <picture>
                                    <source media="(min-width:1025px)" srcset="{{ asset('storage/'.setting('banners.banner1')) }}">
                                    <img src="{{ asset('storage/'.setting('banners.banner1')) }}" alt=""
                                        class="object-cover w-full h-auto max-w-full">
                                </picture>
                            </a>
                        </div>
                        <div data-aos="fade-left"
                            class="flex-1 flex xl:flex-col flex-row xl:space-y-[30px] h-full aos-init aos-animate">
                            <div class="w-full xl:h-1/2"><a href="/single-product"><img src="{{ asset('storage/'.setting('banners.banner2')) }}"
                                        alt="" class="w-full h-full"></a></div>
                            <div class="w-full xl:h-1/2"><a href="/single-product"><img src="{{ asset('storage/'.setting('banners.banner3')) }}"
                                        alt="" class="w-full h-full"></a></div>
                        </div>
                    </div>
                    <div data-aos="fade-up"
                        class="best-services w-full bg-white flex flex-col space-y-10 lg:space-y-0 lg:flex-row lg:justify-between lg:items-center lg:h-[110px] px-10 lg:py-0 py-10 aos-init">
                        <div class="item">
                            <div class="flex items-center space-x-5">
                                <div><span><svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 1H5.63636V24.1818H35" stroke="#FFBB38" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="square"></path>
                                            <path
                                                d="M8.72763 35.0002C10.4347 35.0002 11.8185 33.6163 11.8185 31.9093C11.8185 30.2022 10.4347 28.8184 8.72763 28.8184C7.02057 28.8184 5.63672 30.2022 5.63672 31.9093C5.63672 33.6163 7.02057 35.0002 8.72763 35.0002Z"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                            <path
                                                d="M31.9073 35.0002C33.6144 35.0002 34.9982 33.6163 34.9982 31.9093C34.9982 30.2022 33.6144 28.8184 31.9073 28.8184C30.2003 28.8184 28.8164 30.2022 28.8164 31.9093C28.8164 33.6163 30.2003 35.0002 31.9073 35.0002Z"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                            <path d="M34.9982 1H11.8164V18H34.9982V1Z" stroke="#FFBB38" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="square"></path>
                                            <path d="M11.8164 7.18164H34.9982" stroke="#FFBB38" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="square"></path>
                                        </svg></span></div>
                                <div>
                                    <p class="text-black text-[15px] font-700 tracking-wide mb-1">Free
                                        Shipping</p>
                                    <p class="text-sm text-qgray">When ordering over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex items-center space-x-5">
                                <div><span><svg width="32" height="34" viewBox="0 0 32 34" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M31 17.4502C31 25.7002 24.25 32.4502 16 32.4502C7.75 32.4502 1 25.7002 1 17.4502C1 9.2002 7.75 2.4502 16 2.4502C21.85 2.4502 26.95 5.7502 29.35 10.7002"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10">
                                            </path>
                                            <path d="M30.7 2L29.5 10.85L20.5 9.65" stroke="#FFBB38" stroke-width="2"
                                                stroke-miterlimit="10" stroke-linecap="square"></path>
                                        </svg></span></div>
                                <div>
                                    <p class="text-black text-[15px] font-700 tracking-wide mb-1">Free Return
                                    </p>
                                    <p class="text-sm text-qgray">Get Return within 30 days</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex items-center space-x-5">
                                <div><span><svg width="32" height="38" viewBox="0 0 32 38" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.6654 18.667H9.33203V27.0003H22.6654V18.667Z" stroke="#FFBB38"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                            <path
                                                d="M12.668 18.6663V13.6663C12.668 11.833 14.168 10.333 16.0013 10.333C17.8346 10.333 19.3346 11.833 19.3346 13.6663V18.6663"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                            <path
                                                d="M31 22C31 30.3333 24.3333 37 16 37C7.66667 37 1 30.3333 1 22V5.33333L16 2L31 5.33333V22Z"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                        </svg></span></div>
                                <div>
                                    <p class="text-black text-[15px] font-700 tracking-wide mb-1">Secure
                                        Payment</p>
                                    <p class="text-sm text-qgray">100% Secure Online Payment</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex items-center space-x-5">
                                <div><span><svg width="32" height="35" viewBox="0 0 32 35" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 13H5.5C2.95 13 1 11.05 1 8.5V1H7" stroke="#FFBB38"
                                                stroke-width="2" stroke-miterlimit="10"></path>
                                            <path d="M25 13H26.5C29.05 13 31 11.05 31 8.5V1H25" stroke="#FFBB38"
                                                stroke-width="2" stroke-miterlimit="10">
                                            </path>
                                            <path d="M16 28V22" stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10">
                                            </path>
                                            <path d="M16 22C11.05 22 7 17.95 7 13V1H25V13C25 17.95 20.95 22 16 22Z"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                            <path d="M25 34H7C7 30.7 9.7 28 13 28H19C22.3 28 25 30.7 25 34Z"
                                                stroke="#FFBB38" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="square"></path>
                                        </svg></span></div>
                                <div>
                                    <p class="text-black text-[15px] font-700 tracking-wide mb-1">Best Quality
                                    </p>
                                    <p class="text-sm text-qgray">Original Product Guarenteed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-style-one new-products mb-[60px]">
            <div class="w-full section-wrapper ">
                <div class="max-w-[1216px] mx-auto">
                    <div class="flex items-center justify-between mb-5 section-title">
                        <div>
                            <h1 class="text-xl font-semibold leading-none sm:text-3xl text-qblacktext">New Arrivals
                            </h1>
                        </div>
                        <div><a href="/all-products">
                                <div class="flex items-center space-x-2">
                                    <p class="text-base font-semibold text-qblack">View More</p><span
                                        class="animate-right-dir"><svg width="17" height="14" viewBox="0 0 17 14"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0225 6.00243C13.9998 6.03738 13.9772 6.06941 13.9545 6.10436C13.8724 6.10727 13.7904 6.11601 13.7083 6.11601C9.93521 6.11601 6.16215 6.11601 2.38909 6.11601C1.87111 6.11601 1.35313 6.10728 0.835147 6.12475C0.351131 6.14514 0.00863998 6.51501 0.000148475 6.981C-0.00834303 7.45864 0.3483 7.83725 0.837977 7.8722C0.956858 7.88094 1.07857 7.87511 1.20028 7.87511C5.33565 7.87803 9.46818 7.87803 13.6035 7.88094C13.7253 7.88094 13.8498 7.88094 13.9715 7.88094C14.0026 7.93627 14.031 7.9887 14.0621 8.04403C13.9404 8.12267 13.7988 8.18383 13.697 8.28576C12.3355 9.67499 10.9797 11.0671 9.62669 12.4651C9.26155 12.8437 9.25306 13.3767 9.58423 13.732C9.91823 14.0902 10.4419 14.099 10.8127 13.7233C12.7855 11.702 14.7556 9.6779 16.7199 7.64794C17.0907 7.26351 17.0851 6.73053 16.7171 6.34901C14.7697 4.33652 12.8167 2.32987 10.858 0.329035C10.7278 0.195063 10.5466 0.0873038 10.3683 0.0319679C10.0088 -0.0757916 9.63235 0.116428 9.44554 0.451356C9.26438 0.78046 9.31533 1.20859 9.60687 1.51148C10.6768 2.62111 11.7524 3.72492 12.8308 4.82581C13.2271 5.2219 13.6262 5.60925 14.0225 6.00243Z"
                                                fill="white"></path>
                                            <path
                                                d="M14.0225 6.00241C13.6262 5.60923 13.2243 5.22188 12.8336 4.82288C11.7552 3.72199 10.6796 2.61818 9.60971 1.50855C9.31816 1.20566 9.26721 0.77753 9.44837 0.448427C9.63518 0.113498 10.0116 -0.0787213 10.3711 0.0290382C10.5466 0.0814617 10.7278 0.192134 10.8608 0.326105C12.8195 2.32694 14.7697 4.33359 16.7199 6.34608C17.0879 6.72469 17.0936 7.26058 16.7228 7.64501C14.7584 9.67497 12.7884 11.6991 10.8155 13.7203C10.4475 14.0989 9.92106 14.0873 9.58706 13.7291C9.25589 13.3737 9.26155 12.8408 9.62952 12.4622C10.9825 11.0642 12.3383 9.67206 13.6998 8.28284C13.8017 8.1809 13.9404 8.11974 14.0649 8.0411C14.0338 7.98577 14.0055 7.93334 13.9743 7.87801C13.8526 7.87801 13.7281 7.87801 13.6064 7.87801C9.47101 7.8751 5.33848 7.8751 1.20311 7.87218C1.0814 7.87218 0.962519 7.87801 0.840808 7.86927C0.3483 7.84015 -0.00834304 7.45862 0.00014847 6.98098C0.00863998 6.515 0.351131 6.14512 0.832316 6.12764C1.3503 6.10726 1.86828 6.11891 2.38626 6.11891C6.16215 6.11599 9.93521 6.11599 13.7083 6.11599C13.7904 6.11599 13.8724 6.10726 13.9574 6.10143C13.9772 6.0694 13.9998 6.03445 14.0225 6.00241Z"
                                                fill="black"></path>
                                        </svg></span>
                                </div>
                            </a></div>
                    </div>
                    <div class="section-content">
                        <div class="w-full products-section">
                            <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 xl:gap-[15px] gap-5">
                                @foreach ($products as $item)
                                    <a href="{{ route('single-product',$item->slug) }}">
                                        <div data-aos="fade-up" class="item aos-init">
                                            <div class="relative w-full h-full overflow-hidden bg-white product-card-one group"
                                                style="box-shadow: rgba(0, 0, 0, 0.05) 0px 15px 64px 0px;">
                                                <div class="product-card-img w-full h-[250px] "
                                                    style="background-size: contain;background-position: center;background-repeat: no-repeat;
                                                    background-image: url('{{ asset('storage/' . str_replace('\\', '/', $item->getPrincipalImage())) }}') ;">
                                                </div>
                                                <div class=" px-[30px] pt-[20px] pb-[10px] relative">
                                                    <div class="reviews flex space-x-[1px] mb-2">
                                                        @php
                                                            $randomIterations = rand(4, 5);
                                                        @endphp

                                                        @for ($i = 0; $i < $randomIterations; $i++)
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
                                                        {{ $item->name }}
                                                    </p>

                                                    <p class="price"><span
                                                            class="main-price text-gray-500 line-through font-semibold text-[18px]">{{ $item->specialPrice }}</span><span
                                                            class="offer-price text-red-600 font-bold text-[21px] ml-2">{{ $item->price }}</span>
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
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full products-ads-section mb-[60px]">
            <div class="max-w-[1216px] mx-auto">
                <div class="items-center w-full overflow-hidden 164">
                    <div data-aos="fade-right" class="w-full h-full mb-5 sm:mb-0 aos-init"><a href="/single-product"><img
                                src="/assets/images/ads-4.png" alt="" class="w-full h-auto sm:h-full"></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
