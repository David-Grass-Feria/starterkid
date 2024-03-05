<div>
<form wire:submit="save">
{{$slot}}

<div class="mt-10 flex items-center justify-end space-x-2">
    <a href="{{$cancelRoute}}">
    <x-starterkid::starterkid.button-secondary type="button">{{__('Cancel')}}</x-starterkid::starterkid.button-secondary>
    </a>
    <x-starterkid::starterkid.button-primary type="submit">{{__('Save')}} <x-starterkid::starterkid.please-wait wire:loading wire:target="save">{{__('...')}}</x-starterkid::starterkid.please-wait></x-starterkid::starterkid.button-primary>
</form>
    @if(isset($footer))
    {{$footer}}
    @endif
</div>

</div>
