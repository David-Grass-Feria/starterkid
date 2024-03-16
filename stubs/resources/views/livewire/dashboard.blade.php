<div>
    <x-starterkid::starterkid.card>
        <x-slot name="header">
            {{config('app.name')}}
        </x-slot>
<x-starterkid::starterkid.stat-panel heading="{{__('Statics')}}">
<x-starterkid::starterkid.stat-item>
    <x-slot name="description">
        {{__('Users')}}
    </x-slot>
<x-slot name="total">
    {{$usersCount}}
</x-slot>
</x-starterkid::starterkid.stat-item>





</x-starterkid::starterkid.stat-panel>

@if(isset($output))
<div class="mt-10 p-5 rounded-md bg-gray-800 text-white overflow-scroll">
<span class="text-xs">{!!$output!!}</span>
</div>
@endif

</x-starterkid::starterkid.card>




</div>