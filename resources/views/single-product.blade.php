@extends('layouts.store')

@section('title', setting('site.title') . ' | ' . $product->name)

@section('content')
    <div class="w-full pt-0 pb-0 mt-32">
        <div class="w-full single-product-wrapper my-[60px] ">
            <div class="product-view-main-wrapper bg-white pt-[30px] w-full px-3">
                <div class="w-full breadcrumb-wrapper ">
                    <div class="mx-auto max-w-[1216px]">
                        <div class="breadcrumb-wrapper font-400 text-[13px] text-qblack mb-[23px]">
                            <span><a href="/"><span class="mx-1 capitalize">Home</span></a>
                                <span class="sperator">/</span></span>
                            <span><span class="mx-1 capitalize">Product</span>
                                <span class="sperator">/</span></span>
                            <span><span class="mx-1 capitalize">{{ $product->slug }}</span></span>
                        </div>
                    </div>
                </div>
                <div class="w-full bg-white pb-[10px]">
                    <div class="mx-auto max-w-[1216px]">
                        <div class="justify-between w-full product-view lg:flex ">
                            <div data-aos="fade-right" class="lg:w-1/2 xl:mr-[70px] lg:mr-[50px] aos-init"
                                x-data="{ selectedImage: '{{ asset('storage/' . str_replace('\\', '/', $product->getPrincipalImage())) }}' }">
                                <div class="w-full">
                                    <div
                                        class="w-full h-[500px] flex justify-center items-center overflow-hidden relative mb-3">
                                        <img x-src="selectedImage" alt="" class="object-contain">
                                        <div
                                            class="w-[80px] h-[80px] rounded-full bg-qyellow text-qblack flex justify-center items-center text-xl font-medium absolute left-[30px] top-[30px]">
                                            <span>-50%</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        @foreach ($product->images as $item)
                                            <div class="w-[110px] h-[110px] p-[15px] cursor-pointer"
                                                @click="selectedImage = '{{ asset('storage/' . $item->image) }}'">
                                                <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                                    class="object-contain w-full h-full">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="flex-1">
                                <div class="w-full mt-10 product-details lg:mt-0"><span data-aos="fade-up"
                                        class="inline-block mb-2 text-xs font-normal tracking-wider uppercase text-qgray aos-init">{{ $product->category->name }}</span>
                                    <p data-aos="fade-up" class="mb-4 text-xl font-medium capitalize text-qblack aos-init">
                                        {{ $product->name }}</p>
                                    <div data-aos="fade-up" class="flex space-x-[10px] items-center mb-6 aos-init">
                                        <div class="flex"><svg width="18" height="17" viewBox="0 0 18 17"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                                    fill="#FFA800"></path>
                                            </svg><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                                    fill="#FFA800"></path>
                                            </svg><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                                    fill="#FFA800"></path>
                                            </svg><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                                    fill="#FFA800"></path>
                                            </svg><svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9 0L11.0206 6.21885H17.5595L12.2694 10.0623L14.2901 16.2812L9 12.4377L3.70993 16.2812L5.73056 10.0623L0.440492 6.21885H6.97937L9 0Z"
                                                    fill="#FFA800"></path>
                                            </svg></div><span class="text-[13px] font-normal text-qblack">6 Reviews</span>
                                    </div>

                                    @livewire('apply-form', ['product' => $product])

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-des-wrapper w-full relative pb-[60px]">
                <div class="w-full mt-5 mb-10 tab-buttons sm:mt-0">
                    <div class="mx-auto max-w-[1216px]">
                        <ul class="flex space-x-12 ">
                            <li><span
                                    class="py-[15px] sm:text-[15px] text-sm sm:block border-b font-medium cursor-pointer border-qyellow text-qblack ">Description</span>
                            </li>
                            <li><span
                                    class="py-[15px] sm:text-[15px] text-sm sm:block border-b font-medium cursor-pointer border-transparent text-qgray">Reviews</span>
                            </li>
                            <li><span
                                    class="py-[15px] sm:text-[15px] text-sm sm:block border-b font-medium cursor-pointer border-transparent text-qgray">Seller
                                    Info</span></li>
                        </ul>
                    </div>
                    <div class="w-full h-[1px] bg-[#E8E8E8] absolute left-0 sm:top-[50px] top-[36px] -z-10"></div>
                </div>
                <div class="tab-contents w-full min-h-[400px] ">
                    <div class="mx-auto max-w-[1216px]">
                        <div class="w-full tab-content-item ">
                            {!! $description !!}

                            <div id="livewire-container"></div>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('related-product')
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener('livewire:init', function() {
                Livewire.dispatch('renderComponent', 'apply-form', {!! json_encode($product) !!});
            });
        </script>
    @endpush
@endsection
