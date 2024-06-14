@extends('layouts.store')

@section('title', setting('site.title') . ' | ' . $product->name)

@section('content')
    <div class="w-full pt-0 pb-0 mt-20 lg:mt-32">
        <div class="w-full single-product-wrapper lg:my-[60px] my-[15px]">
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
                            <div class="lg:w-1/2 xl:mr-[70px] lg:mr-[50px] ">
                                @livewire('product-images', ['product' => $product])
                            </div>
                            <div class="flex-1">
                                <div class="w-full mt-10 product-details lg:mt-0"><span
                                        class="inline-block mb-2 text-xs font-normal tracking-wider uppercase text-gray ">{{ $product->category->name }}</span>
                                    <p class="mb-2 text-2xl font-normal text-black capitalize">
                                        {{ $product->name }}</p>
                                    @livewire('apply-form', ['product' => $product])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-des-wrapper w-full relative pb-[60px]">
                <div class="tab-contents w-full min-h-[400px] ">
                    <div class="mx-auto max-w-[1216px]">
                        <div class="w-full tab-content-item ">
                            @livewire('product-description', ['product' => $product])
                        </div>
                    </div>
                </div>
            </div>
            @livewire('related-product')
        </div>
    </div>
@endsection
