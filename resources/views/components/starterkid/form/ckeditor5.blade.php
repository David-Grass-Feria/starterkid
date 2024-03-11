<div x-data>
    
    @push('styles')
        <link rel="stylesheet"
            href="{{ asset('vendor/ckeditor5/ckeditor5/content-styles.css') }}"
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
    
    @section('scripts')
    <script src="{{ asset('vendor/ckeditor5/ckeditor5/build/ckeditor.js') }}"></script>
    @endsection
    
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (!window.ckEditors) {
                window.ckEditors = {};
            }
    
            const editorElement = document.getElementById('{{ $for }}');
            if (editorElement && !window.ckEditors['{{ $for }}']) {
                ClassicEditor.create(editorElement)
                    .then(editor => {
                        window.ckEditors['{{ $for }}'] = editor;
                        editor.model.document.on('change:data', () => {
                            @this.set('{{ $for }}', editor.getData(), false);
                        });
                    })
                    .catch(error => {
                        console.error(error);
                    });
            }
        });
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
