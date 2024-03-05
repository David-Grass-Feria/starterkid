<div>
  
    
  
    @foreach($record->getMedia($collection) as $file)
    <div class="{{$divClass}}">
    <audio loop controls>
        <source src="{{ route('stream.files', $file->id) }}" type="{{ $file->mime_type }}">
            {{__('Your browser not support this audio')}}
        </audio>
    </div>
    @endforeach

   

  
</div>
