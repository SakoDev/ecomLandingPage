<div>
    <div class="w-full">
        <div class="w-full h-[20%] flex justify-center items-center overflow-hidden relative mb-3">
            <img src="{{ $selectedImage }}" alt="" class="object-contain">
        </div>
        {{-- <div class="flex flex-wrap gap-2">
            @foreach ($product->images as $item)
                <div class="w-[110px] h-[110px] p-[15px] cursor-pointer"
                    wire:click="changeImage('{{ asset('storage/' . $item->image) }}')">
                    <img src="{{ asset('storage/' . $item->image) }}" alt="" class="object-contain w-full h-full">
                </div>
            @endforeach
        </div> --}}
    </div>
</div>
