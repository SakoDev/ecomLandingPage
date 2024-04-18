<div>
    {!! str_replace('<!--Form-->', '<div id="form-placeholder"></div>', $description) !!}
    @if ($renderForm)
       <div class="p-4 mt-12"> @livewire('apply-form', ['product' => $product])</div>
    @endif

    @push('scripts')
        <script>
            document.addEventListener('Livewire:initialized', function() {
                console.log('dddd');
                var placeholder = document.getElementById('form-placeholder');
                fetch(`/load-form/${!! $product !!}`)
                    .then(response => response.text())
                    .then(html => {
                        placeholder.innerHTML = html;
                        Livewire.rescan(); 
                    });
            });
        </script>
    @endpush

</div>
