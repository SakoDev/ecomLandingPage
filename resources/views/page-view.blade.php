@extends('layouts.store')

@section('title', $page->title)

@section('content')
    <div class="w-full pt-0 pb-0 mt-32">
        <div class="terms-condition-page w-full bg-white pb-[30px]">
            <div class="w-full mb-[30px]">
                <div class="page-title-wrapper bg-[#FFFAEF] w-full h-[173px] py-10">
                    <div class="mx-auto max-w-[1216px]">
                        <div class="mb-5">
                            <div class="breadcrumb-wrapper font-400 text-[13px] text-black mb-[23px]">
                                <span>
                                    <a href="/"><span class="mx-1 capitalize">home</span></a>
                                    <span class="sperator">/</span></span>
                                <span class="mx-1 capitalize">Page</span>
                                <span class="sperator">/</span></span>
                                <span class="mx-1 capitalize">{{ $page->title }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex justify-center">
                            <h1 class="text-2xl font-bold text-black capitalize">{{ $page->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full my-6">
                <div class="mx-auto max-w-[1216px]">
                    {!! $page->description !!}
                </div>
            </div>
            
        </div>
        <div class="mt-6">
            @livewire('related-product')
        </div>
    </div>
@endsection
