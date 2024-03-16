<div>
  
    
  
    @foreach($record->getMedia($collection) as $file)
    
    <video class="{{ $videoClass }}" predload="none" controls>
        <source src="{{ route('stream.files', $file->id) }}" type="{{ $file->mime_type }}">
        {{__('Your browser not support this video')}}
    </video>

    @endforeach

   

  
</div>
