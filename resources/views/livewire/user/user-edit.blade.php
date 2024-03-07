<div>
    <x-starterkid::starterkid.card>
            <x-slot name="header">
            <a href="{{route('users.index')}}" title="{{__('User list')}}">
            <x-starterkid::starterkid.button-secondary type="button">{{__('Back')}}</x-starterkid::starterkid.button-secondary>
            </a>
            </x-slot>
            <x-starterkid::starterkid.form cancelRoute="{{route('users.index')}}">
            <x-starterkid::starterkid.form.text wire:model="name" for="name" id="name" type="text" label="{{__('Name')}}" autocomplete="name" required/>
            <x-starterkid::starterkid.form.text wire:model="email" for="email" id="email" type="email" label="{{__('Email')}}" autocomplete="email" required/>
            <x-starterkid::starterkid.form.ckeditor5 wire:model="bio" for="bio" id="bio" rows="5" label="{{__('Bio')}}">
            @if(isset($bio))
            {!! $bio !!}
            @endif
                </x-starterkid::starterkid.form.ckeditor5>
    </x-starterkid::starterkid.form>


    </x-starterkid::starterkid.card>
    </div>