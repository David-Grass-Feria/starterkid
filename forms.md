#### text

```shell
<x-starterkid::starterkid.form.text wire:model="title" for="title" id="title" type="text" label="{{__('Title')}}" required/>
```

#### slug
```shell
<x-starterkid::starterkid.form.slug wire:model="slug" slug="https://service/" for="slug" id="slug" type="text" label="{{__('Slug')}}" required/>
```


#### youtube video

```shell
<x-starterkid::starterkid.form.text wire:model="youtube_video_link" for="youtube_video_link" id="youtube_video_link" type="text" label="{{__('Youtube video')}}" required/>
@if(isset($this->post))
<livewire-starterkid::show-youtube-video key="youtube_video_link{{$post->id}}" lazy youtubeLink="{{$post->youtube_video_link}}" iframeClass="w-full h-full aspect-video mb-5" />
@endif
```

#### vimeo video

```shell
<x-starterkid::starterkid.form.text wire:model="vimeo_video_link" for="vimeo_video_link" id="vimeo_video_link" type="text" label="{{__('Vimeo video')}}" required/>
@if(isset($this->post))
<livewire-starterkid::show-vimeo-video key="vimeo_video_link{{$post->id}}" lazy vimeoLink="{{$post->vimeo_video_link}}" iframeClass="w-full h-full aspect-video mb-5" />
@endif
```

#### color

```shell
<x-starterkid::starterkid.form.color wire:model="color" for="color" id="color" label="{{__('Color')}}" required />
```

#### range

```shell
<x-starterkid::starterkid.form.range wire:model="range" for="range" id="range" value="{{$range}}" label="{{__('Range')}}" min="0" max="100" step="1" />
```

#### textarea

```shell
<x-starterkid::starterkid.form.textarea wire:model="about" for="about" id="about" rows="5" label="{{__('About')}}" required ></x-starterkid::starterkid.form.textarea>
```

#### ckeditor5

```shell
<x-starterkid::starterkid.form.ckeditor5 wire:model="body" for="body" id="body" rows="5" label="{{__('Body')}}" required>
@if(isset($post))
{!!$post->body!!}
@endif
</x-starterkid::starterkid.form.ckeditor5>
```

#### ckeditor5 simple
```shell
<x-starterkid::starterkid.form.ckeditor5 wire:model="body2" for="body2" id="body2" rows="5" label="{{__('Body2')}}">
<x-slot name="removePlugins">
'CodeBlock','List','Highlight','HorizontalLine','BlockQuote','Table','Italic','Heading','Image','ImageUpload','MediaEmbed','SimpleUploadAdapterPlugin'
</x-slot>
</x-starterkid::starterkid.form.ckeditor5>
```


#### select2

```shell
<x-starterkid::starterkid.form.select wire:model="country" for="country" id="country" label="{{__('Countrys')}}" placeholder="{{__('Choose your country')}}" required>
<option value="null">{{__('Choose your country')}}</option>
<option value="usa">Usa</option>
<option value="germany">Germany</option>
</x-starterkid::starterkid.form.select>
```

#### checkbox

```shell
<x-starterkid::starterkid.form.checkbox for="active" id="active" label="{{__('Active')}}" required>
<x-starterkid::starterkid.input-checkbox-radio-panel>
<x-starterkid::starterkid.input-checkbox wire:model="active" name="active" />
<x-starterkid::starterkid.label>Active</x-starterkid::starterkid.label>
</x-starterkid::starterkid.input-checkbox-radio-panel>
</x-starterkid::starterkid.form.checkbox>
```


#### radio

```shell
<x-starterkid::starterkid.form.radio for="coins" id="coins" label="{{__('Coins')}}" required>
<x-starterkid::starterkid.input-checkbox-radio-panel>
<x-starterkid::starterkid.input-radio wire:model="coins" value="Bitcoin" name="coins"/>
<x-starterkid::starterkid.label>Bitcoin</x-starterkid::starterkid.label>
</x-starterkid::starterkid.input-checkbox-radio-panel>
// more                    
</x-starterkid::starterkid.form.radio>
```


#### date

```shell
<x-starterkid::starterkid.form.date wire:model="date" for="date" id="date" label="{{__('Date')}}" required />
```


#### datetime

```shell
<x-starterkid::starterkid.form.datetime wire:model="date_time" for="date_time" id="date_time" label="{{__('Datetime')}}" required />
```


#### time

```shell
<x-starterkid::starterkid.form.time wire:model="time" for="time" id="time" label="{{__('Time')}}" required />
```



#### audio uploads

```shell
<x-starterkid::starterkid.form.file wire:model="public_songs" for="public_songs" id="public_songs" label="{{__('Songs')}}" maxFileSize="{{config('starterkid.max_file_size_mb')}}MB" maxTotalFileSize="{{config('starterkid.max_file_size_mb')}}MB" required >
<x-slot name="acceptedFileTypes">
'audio/*'
</x-slot>
</x-starterkid::starterkid.form.file>
@if(isset($this->post))
<livewire-starterkid::show-audio lazy key="public_songs_{{$post->id}}" :record="$post" collection="songs" divClass="mb-5" />
@endif
```


#### video uploads

```shell
 <x-starterkid::starterkid.form.file wire:model="public_videos" for="public_videos" id="public_videos" label="{{__('Videos')}}" maxFileSize="{{config('starterkid.max_file_size_mb')}}MB" maxTotalFileSize="{{config('starterkid.max_file_size_mb')}}MB" required >
<x-slot name="acceptedFileTypes">
'video/*'
</x-slot>
</x-starterkid::starterkid.form.file>
@if(isset($this->post))
<livewire-starterkid::show-video lazy key="public_videos_{{$post->id}}" :record="$post" collection="videos" videoClass="w-full h-full aspect-video mb-5" />
@endif
```


#### image uploads

```shell
<x-starterkid::starterkid.form.file multiple name="public_photos" wire:model="public_photos" for="public_photos" id="public_photos" label="{{__('Photos')}}" maxFileSize="{{config('starterkid.max_file_size_mb')}}MB" maxTotalFileSize="{{config('starterkid.max_file_size_mb')}}MB" required >
<x-slot name="acceptedFileTypes">
'image/*'
</x-slot>
</x-starterkid::starterkid.form.file>
@if(isset($this->post))
<livewire-starterkid::show-image key="public_photos_{{$post->id}}" :record="$post" collection="photos" divClass="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-1 mt-5 mb-5" imgClass="h-32" enableFileDelete />
@endif
```

#### show image uploads in table
```
 <x-starterkid::starterkid.td>
                    @if($subject->getFirstMediaUrl('images','thumb'))
                    <img src="{{$subject->getFirstMediaUrl('images','thumb')}}" alt="{{$subject->name}}" class="h-12 w-auto" />
                    @endif
</x-starterkid::starterkid.td>
```

#### file uploads

```shell
<x-starterkid::starterkid.form.file multiple wire:model="public_files" for="public_files" id="public_files" label="{{__('Files')}}" maxFileSize="{{config('starterkid.max_file_size_mb')}}MB" maxTotalFileSize="{{config('starterkid.max_file_size_mb')}}MB" required >
<x-slot name="acceptedFileTypes">
'application/*'
</x-slot>
</x-starterkid::starterkid.form.file>
@if(isset($this->post))
<livewire-starterkid::show-file key="public_files_{{$post->id}}" :record="$post" collection="files" divClass="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-1 mt-5 mb-5" imgClass="h-32" enableFileDelete />
@endif
```
