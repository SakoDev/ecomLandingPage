@extends('layouts.store')

@section('title', setting('site.title') . ' | ' . setting('site.description'))

@section('content')
    <div class="w-full  pt-[30px] pb-[60px]">
        <div class="w-5 h-5 btn "></div>
        <div class="w-full banner-wrapper my-[60px]">
            <div class="max-w-[1216px] mx-auto">
                <div class="w-full main-wrapper" wire:ignore>
                    <div class="banner-card xl:flex xl:space-x-[30px] xl:h-[600px]  mb-[30px]">
                        <div data-aos="fade-right" class="xl:w-[740px] w-full h-full aos-init aos-animate">
                            <a href="{{ setting('banners.banner1url') }}">
                                <picture>
                                    <source media="(min-width:1025px)"
                                        srcset="{{ asset('storage/' . setting('banners.banner1')) }}">
                                    <img src="{{ asset('storage/' . setting('banners.banner1')) }}" alt=""
                                        class="object-cover w-full h-auto max-w-full">
                                </picture>
                            </a>
                        </div>
                        <div data-aos="fade-left"
                            class="flex-1 flex xl:flex-col flex-row xl:space-y-[30px] h-full aos-init aos-animate">
                            <div class="w-full xl:h-1/2"><a href="{{ setting('banners.banner2url') }}"><img
                                        src="{{ asset('storage/' . setting('banners.banner2')) }}" alt=""
                                        class="w-full h-full"></a></div>
                            <div class="w-full xl:h-1/2"><a href="{{ setting('banners.banner3url') }}"><img
                                        src="{{ asset('storage/' . setting('banners.banner3')) }}" alt=""
                                        class="w-full h-full"></a></div>
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
                        <div></div>
                    </div>
                    <div class="section-content">
                        <div class="w-full products-section">
                            <div class="grid xl:grid-cols-4 lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 xl:gap-[15px] gap-5">
                                @foreach ($products as $product)
                                    @livewire('product-card', ['product' => $product])
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
        @livewire('best-services')
    </div>
@endsection
