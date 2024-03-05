<div class="{{ $divClass }}">
    @foreach($record->getMedia($collection) as $file)
        <div class="relative">
        <a target="_blank" href="{{ route('stream.files', ['media' => $file->id,'recordId' => $record]) }}">
            <img alt="{{ $file->name }}" src="{{ route('stream.files', ['media' => $file->id,'recordId' => $record]) }}" class="{{ $imgClass }}" />
        </a>
    
    @if($enableFileDelete)
    <button wire:click="deleteSingleFile({{ $file->id }})" wire:confirm="{{__('Are you sure?')}}" type="button" class="absolute bottom-0 rounded-sm bg-white p-0.5 text-fontPrimary shadow-sm">
        <x-starterkid::starterkid.icons.delete />
      </button>
      @endif
    </div>
    @endforeach
</div>

