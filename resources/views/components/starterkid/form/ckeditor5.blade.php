<div x-data>

    @push('styles')
        <link href="{{ asset('vendor/ckeditor5/ckeditor5/content-styles.css') }}" rel="stylesheet" />
    @endpush

    @section('scripts')
        <script src="{{ asset('vendor/ckeditor5/ckeditor5/build/ckeditor.js') }}"></script>
        <script>
            class MyUploadAdapter {
                constructor(loader) {
                    // The file loader instance to use during the upload. It sounds scary but do not
                    // worry — the loader will be passed into the adapter later on in this guide.
                    this.loader = loader;
                }
                // Starts the upload process.
                upload() {
                    return this.loader.file
                        .then(file => new Promise((resolve, reject) => {
                            this._initRequest();
                            this._initListeners(resolve, reject, file);
                            this._sendRequest(file);
                        }));
                }
                // Aborts the upload process.
                abort() {
                    if (this.xhr) {
                        this.xhr.abort();
                    }
                }
                // Initializes the XMLHttpRequest object using the URL passed to the constructor.
                _initRequest() {
                    const xhr = this.xhr = new XMLHttpRequest();
                    // Note that your request may look different. It is up to you and your editor
                    // integration to choose the right communication channel. This example uses
                    // a POST request with JSON as a data structure but your configuration
                    // could be different.
                    xhr.open('POST', '{{ route('ckeditor5.images.store') }}', true);
                    xhr.setRequestHeader('x-csrf-token', '{{ csrf_token() }}');
                    xhr.responseType = 'json';
                }
                // Initializes XMLHttpRequest listeners.
                _initListeners(resolve, reject, file) {
                    const xhr = this.xhr;
                    const loader = this.loader;
                    const genericErrorText = `Couldn't upload file: ${ file.name }.`;
                    xhr.addEventListener('error', () => reject(genericErrorText));
                    xhr.addEventListener('abort', () => reject());
                    xhr.addEventListener('load', () => {
                        const response = xhr.response;
                        // This example assumes the XHR server's "response" object will come with
                        // an "error" which has its own "message" that can be passed to reject()
                        // in the upload promise.
                        //
                        // Your integration may handle upload errors in a different way so make sure
                        // it is done properly. The reject() function must be called when the upload fails.
                        if (!response || response.error) {
                            return reject(response && response.error ? response.error.message : genericErrorText);
                        }
                        // If the upload is successful, resolve the upload promise with an object containing
                        // at least the "default" URL, pointing to the image on the server.
                        // This URL will be used to display the image in the content. Learn more in the
                        // UploadAdapter#upload documentation.
                        resolve({
                            default: response.url
                        });
                    });
                    // Upload progress when it is supported. The file loader has the #uploadTotal and #uploaded
                    // properties which are used e.g. to display the upload progress bar in the editor
                    // user interface.
                    if (xhr.upload) {
                        xhr.upload.addEventListener('progress', evt => {
                            if (evt.lengthComputable) {
                                loader.uploadTotal = evt.total;
                                loader.uploaded = evt.loaded;
                            }
                        });
                    }
                }
                // Prepares the data and sends the request.
                _sendRequest(file) {
                    // Prepare the form data.
                    const data = new FormData();
                    data.append('ckeditorupload', file);
                    // Important note: This is the right place to implement security mechanisms
                    // like authentication and CSRF protection. For instance, you can use
                    // XMLHttpRequest.setRequestHeader() to set the request headers containing
                    // the CSRF token generated earlier by your application.
                    // Send the request.
                    this.xhr.send(data);
                }
                // ...
            }

            function SimpleUploadAdapterPlugin(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                    // Configure the URL to the upload script in your back-end here!
                    return new MyUploadAdapter(loader);
                };
            }
        </script>
    @endsection





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (!window.ckEditors) {
                window.ckEditors = {};
            }

            const editorElement = document.getElementById('{{ $for }}');
            if (editorElement && !window.ckEditors['{{ $for }}']) {
                ClassicEditor.create(editorElement, {
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Überschrift 2',
                                    class: 'ck-heading_heading2'
                                },

                            ]
                        },

                        highlight: {
                            options: [{
                                    model: 'yellowMarker',
                                    class: 'marker-yellow',
                                    title: 'Gelb Marker',
                                    color: 'var(--ck-highlight-marker-yellow)',
                                    type: 'marker'
                                }

                            ]
                        },
                        link: {

                            decorators: [{
                                    mode: 'manual',
                                    label: 'NoFollow',
                                    attributes: {
                                        rel: 'nofollow'
                                    }
                                },
                                {
                                    mode: 'manual',
                                    label: 'OpenInNewWindow',
                                    attributes: {
                                        target: '_blank'
                                    }
                                }


                            ]
                        },



                        extraPlugins: [SimpleUploadAdapterPlugin],
                        removePlugins: [{{ $removePlugins ?? '' }}] // Plugins, die deaktiviert werden sollen
                    })
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
            <x-starterkid::starterkid.label
                for="{{ $for }}">{{ $label }}</x-starterkid::starterkid.label>
            @if ($attributes->get('required'))
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
