@extends('layouts.store')
@section('title', setting('site.title').' | '.'Thank you')
@section('content')
    <div class="w-full pt-0 pb-0 mt-[100px]">
        <div class="w-full single-product-wrapper ">
            <div class="w-full breadcrumb-wrapper ">
                <div class="mx-auto max-w-[1216px]">
                    <div class="breadcrumb-wrapper font-400 text-[13px] text-qblack mb-[23px]">
                        <span><a href="/"><span class="mx-1 capitalize">Home</span></a>
                            <span class="sperator">/</span></span>
                        <span><span class="mx-1 capitalize">Product</span>
                            <span class="sperator">/</span></span>
                        <span><span class="mx-1 capitalize">Thank you :)</span></span>
                    </div>
                </div>
            </div>
            <div class="w-full px-3 bg-white ">
                <div class="flex items-center justify-center h-2/3 py-28">
                        <div class="flex flex-col items-center space-y-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-green-600 w-28 h-28" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h1 class="text-4xl font-bold">Thank You !</h1>
                            <p class="mb-3 text-center">Thank you for your interest! Check your email for a link to the guide.</p>
                            <span class="px-6 py-2 my-3 text-xl font-medium border-2 border-gring-gray-900 bg-slate-50"><span class="text-sm font-normal "> Tracking Number : </span>{{ $tracking_number }}</span>
                        </div>
                </div>
            </div>

            @livewire('related-product')
        </div>
    </div>
@endsection
