<div x-data x-init="initFilepond()">


    @push('styles')
        <link href="{{ asset('vendor/filepond/filepond-master/dist/filepond.min.css') }}" rel="stylesheet" />
    @endpush

    
    <script src="{{ asset('vendor/filepond/filepond-master/dist/filepond.min.js') }}"></script>
    <script src="{{ asset('vendor/filepond/filepond-master/dist/filepond-plugin-file-validate-type.js') }}"></script>
    <script src="{{ asset('vendor/filepond/filepond-master/dist/filepond-plugin-file-validate-size.js') }}"></script> 
    
    @push('scripts')
   
   <script>
        function initFilepond() {
            FilePond.registerPlugin(FilePondPluginFileValidateType);
            FilePond.registerPlugin(FilePondPluginFileValidateSize);

            const pond = FilePond.create(document.getElementById('{{ $for }}'), {

                allowFileSizeValidation: true,
                maxFileSize: '{{ $maxFileSize }}',
                maxTotalFileSize: '{{ $maxTotalFileSize }}',
                allowFileTypeValidation: true,
                acceptedFileTypes: [{{ $acceptedFileTypes }}],
                allowFileTypeValidation: true,
                

                server: {
                    process: (fieldname, file, metadata, load, error, progress, abort, transfer, options) => {
                        @this.upload('{{ $for }}', file, load, error, progress)
                    }


                }

            });
            
        }
        initFilepond();
        
</script>
        

    @endpush


    <div wire:ignore>

        <div class="flex items-center">
            <x-starterkid::starterkid.label for="{{ $for }}">{{ $label }}</x-starterkid::starterkid.label>
            @if ($attributes->get('required'))
                <x-starterkid::starterkid.required />
            @endif
        </div>
        <input type="file" @if($multiple) multiple @endif {{ $attributes }} />
        @if (isset($description))
            <x-starterkid::starterkid.input-description>{{ $description }}</x-starterkid::starterkid.input-description>
        @endif

    </div>
    <div>
        <x-starterkid::starterkid.error for="{{ $for }}" />
    </div>


    


   


       

       
       

</div>
