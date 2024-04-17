<div>
    <div class="w-full bg-white related-product">
        <div class="mx-auto max-w-[1216px]">
            <div class="w-full pt-[10px] pb-[20px]">
                <h1 class="sm:text-3xl text-xl font-600 text-qblacktext leading-none mb-[30px]">Related Product
                </h1>
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
</div>
