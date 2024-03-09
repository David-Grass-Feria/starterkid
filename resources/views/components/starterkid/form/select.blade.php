<div x-data x-init="initSelect2()">


    @push('styles')
        <link href="{{ asset('vendor/select2/select2/select2.min.css') }}" rel="stylesheet" />
    @endpush
    <script src="{{ asset('vendor/select2/jquery-3.6.3/jquery-3.6.3.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2/select2.min.js') }}"></script>
    @push('scripts')
        

        <script>
            function initSelect2() {
                $(document).ready(function() {


                    $('#{{ $for }}').select2({
                        placeholder: "{{ $placeholder ?? 'Choose' }}",
                        allowClear: true,
                        tags: false,
                        

                    });



                });
                $('#{{ $for }}').on('change', function(e) {
                    var data = $('#{{ $for }}').select2("val");
                    @this.set('{{ $for }}', data,false);
                });
            }
            
          
        </script>
    @endpush


    <div class="mb-5">
        <div wire:ignore>
            <div class="flex items-center">
                <x-starterkid::starterkid.label for="{{ $for }}">{{ $label }}</x-starterkid::starterkid.label>
                @if ($attributes->get('required'))
                    <x-starterkid::starterkid.required />
                @endif
            </div>
            <x-starterkid::starterkid.input-select {{ $attributes }}
                class="w-full js-example-placeholder-single js-states form-control">
                {{ $slot }}
            </x-starterkid::starterkid.input-select>
            @if (isset($description))
                <x-starterkid::starterkid.input-description>{{ $description }}</x-starterkid::starterkid.input-description>
            @endif
        </div>
        <div>
            <x-starterkid::starterkid.error for="{{ $for }}" />
        </div>
    </div>

</div>
