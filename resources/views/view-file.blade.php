<x-layouts.app>
<x-starterkid::starterkid.card>
        <x-slot name="header">

            <a href="{{route($backRouteName,$record)}}" title="{{__('User list')}}">
                <x-starterkid::starterkid.button-secondary type="button">{{__('Back')}}</x-starterkid::starterkid.button-secondary>
                </a>
        </x-slot>
        @if($fileType == 'image')
        <img src="{{ $imageUrl }}" alt="Bild" />
        @endif
        @if($fileType == 'file')
        <a class="text-blue-600" href="{{ $imageUrl }}">{{__('View')}}</a>
        @endif

</x-starterkid::starterkid.card>
</x-layouts.app>
