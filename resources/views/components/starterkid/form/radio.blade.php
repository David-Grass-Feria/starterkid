<div class="mb-5">
    <div class="flex items-center">
        <x-starterkid::starterkid.label for="{{$for}}">{{$label}}</x-starterkid::starterkid.label>
        @if($attributes->get('required'))
        <x-starterkid::starterkid.required />
        @endif
        </div>
            {{$slot}}
@if(isset($description))
<x-starterkid::starterkid.input-description>{{$description}}</x-starterkid::starterkid.input-description>
@endif
            <x-starterkid::starterkid.error for="{{$for}}"/>
        </div>
