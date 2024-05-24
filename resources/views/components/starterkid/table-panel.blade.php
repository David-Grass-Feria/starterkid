<div>
    <div>
    <div class="flex flex-col space-y-2 md:flex-row md:items-center md:space-x-2 md:space-y-0">
    {{$tableHeader ?? ''}}
    @if(isset($selected))
    @if($selected)
    <x-starterkid::starterkid.button-danger wire:click="destroyRecords" wire:confirm="{{__('Are you sure?')}}">{{__('Delete')}}<x-starterkid::starterkid.count>{{count($selected)}}</x-starterkid::starterkid.count><x-starterkid::starterkid.please-wait wire:loading wire:target="destroyRecords">{{__('...')}}</x-starterkid::starterkid.please-wait></x-starterkid::starterkid.button-danger>
    @endif
    @if($selected)
    <x-starterkid::starterkid.button-danger wire:click="resetSelected">{{__('Reset')}}<x-starterkid::starterkid.please-wait wire:loading wire:target="resetSelected">{{__('...')}}</x-starterkid::starterkid.please-wait></x-starterkid::starterkid.button-danger>
    @endif
    @endif
    </div>
    </div>
    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <x-starterkid::starterkid.table>
        {{$slot}}
    </x-starterkid::starterkid.table>
    </div>
    </div>
</div>
@if(isset($pagination))
<div class="mt-5">
    
{{$pagination}}

</div>
@endif
</div>
