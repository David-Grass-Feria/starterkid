<div x-data x-init="initCKEditor()">
    
    @push('styles')
        <link rel="stylesheet"
            href="{{ asset('vendor/ckeditor5/ckeditor5-41.1.0/content-styles.css') }}"
            type="text/css">
        <style>
            .ck-editor__editable {
                min-height: 200px;
                max-height: 500px;
                overflow: scroll;


            }

            .ck.ck-editor__editable_inline {
                padding-left: 1em;
            }
        </style>
    @endpush
    
    <script src="{{ asset('vendor/ckeditor5/ckeditor5-41.1.0/build/ckeditor.js') }}"></script>  
    @push('scripts')
    
    <script>

        function initCKEditor() {
                    
                     const editor = ClassicEditor.create(document.getElementById('{{ $for }}'), {
                            
                            
        
                        })
                        .then(editor => {
        
                            editor.model.document.on('change:data', () => {
                                @this.set('{{$for}}', editor.getData(),false);
                            })
                        })
                        .catch(error => {
                            console.log(error);
                        });
        
        }
        
        </script>
      
        @endpush
        
        <script>
            document.addEventListener('DOMContentLoaded', () => { 
                initFilepond();
            })
        </script>

    <div wire:ignore class="mb-5">
        <div class="flex items-center">
            <x-starterkid::starterkid.label for="{{$for}}">{{$label}}</x-starterkid::starterkid.label>
            @if($attributes->get('required'))
            <x-starterkid::starterkid.required />
            @endif
            </div>
        <div {{ $attributes }} class="w-full">{{ $slot }}</div>
        @if (isset($description))
            <x-starterkid::starterkid.input-description>{{ $description }}</x-starterkid::starterkid.input-description>
        @endif



    </div>

    <div>
        <x-starterkid::starterkid.error for="{{ $for }}" />
    </div>



    

    

        

       
          
        
  
</div>
