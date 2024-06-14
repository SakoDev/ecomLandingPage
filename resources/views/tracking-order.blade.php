@extends('layouts.store')
@section('title', setting('site.title') . ' | ' . 'Tracking order')
@section('content')
    <div class="w-full pt-0 pb-0 mt-[100px]">
        <div class="w-full single-product-wrapper ">
            <div class="w-full breadcrumb-wrapper ">
                <div class="mx-auto max-w-[1216px]">
                    <div class="breadcrumb-wrapper font-400 text-[13px] text-qblack mb-[23px]">
                        <span><a href="/"><span class="mx-1 capitalize">Home</span></a>
                            <span class="sperator">/</span></span>
                        <span><span class="mx-1 capitalize">Tracking Order</span></span>
                    </div>
                </div>
            </div>
            <div class="w-full px-3 bg-white p-7">
                    @livewire('tracking-order')
            </div>

            @livewire('related-product')
        </div>
    </div>
@endsection
