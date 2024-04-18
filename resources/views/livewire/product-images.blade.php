<div>
    
        <div class="w-full">
            <div class="w-full h-[500px] flex justify-center items-center overflow-hidden relative mb-3">
                <img src="{{ $selectedImage }}" alt="" class="object-contain">
                <div
                    class="w-[80px] h-[80px] rounded-full bg-yellow-500 text-black flex justify-center items-center text-xl font-medium absolute left-[30px] top-[30px]">
                    <span>-50%</span>
                </div>
            </div>
            <div class="flex flex-wrap gap-2">
                @foreach ($product->images as $item)
                    <div class="w-[110px] h-[110px] p-[15px] cursor-pointer"
                    wire:click="changeImage('{{ $item->image }}')">
                        <img src="{{ asset('storage/' . $item->image) }}" alt=""
                            class="object-contain w-full h-full">
                    </div>
                @endforeach
            </div>
        </div>
</div>
