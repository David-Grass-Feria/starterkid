<div>
    <x-starterkid::starterkid.card>
            <x-slot name="header">
            <a href="{{route('dashboard')}}" title="{{__('Dashboard')}}">
            <x-starterkid::starterkid.button-secondary type="button">{{__('Back')}}</x-starterkid::starterkid.button-secondary>
            </a>
            <a href="{{route('settings.plugin')}}" title="{{__('Plugins')}}">
                <x-starterkid::starterkid.button-secondary type="button">{{__('Plugins')}}</x-starterkid::starterkid.button-secondary>
                </a>
           
            <a target="_blank" href="{{route('horizon.index')}}" title="{{__('Go to Laravel Horizon')}}">
                <x-starterkid::starterkid.button-secondary type="button">{{__('Go to Laravel Horizon')}}</x-starterkid::starterkid.button-secondary>
                </a>
            </x-slot>
            <x-starterkid::starterkid.form cancelRoute="{{route('dashboard')}}">
            <x-starterkid::starterkid.form.color wire:model="primary_color" for="primary_color" id="primary_color" label="{{__('Primary color')}}" required/>
            <x-starterkid::starterkid.form.color wire:model="secondary_color" for="secondary_color" id="secondary_color" label="{{__('Secondary color')}}" required/>
            <x-starterkid::starterkid.form.color wire:model="font_color" for="font_color" id="font_color" label="{{__('Font color')}}" required/>
            <x-starterkid::starterkid.form.color wire:model="font_color_on_dark_background" for="font_color_on_dark_background" id="font_color_on_dark_background" label="{{__('Font color background')}}" required/>
            <x-starterkid::starterkid.form.text wire:model="font_family" for="font_family" id="font_family" label="{{__('Font family')}}" required>
            <x-slot name="description">
            {{__('Go to fontbunny website and search your font name')}} <a target="_blank" title="Font Bunny Website" href="https://fonts.bunny.net/">https://fonts.bunny.net/</a>
            </x-slot>
            </x-starterkid::starterkid.form.text>
            <x-starterkid::starterkid.form.file wire:model="public_logos" for="public_logos" id="public_logos" label="{{__('Logo')}}" maxFileSize="1MB" maxTotalFileSize="1MB">
            <x-slot name="acceptedFileTypes">
            'image/*'
            </x-slot>
            </x-starterkid::starterkid.form.file>
            <div class="mb-5">
            <livewire-starterkid::show-image key="public_logos_{{$setting->id}}" :record="$setting" collection="logo" divClass="w-full" imgClass="h-12" />
            </div>
           <x-starterkid::starterkid.form.file wire:model="public_favicons" for="public_favicons" id="public_favicons" label="{{__('Favicons')}}" maxFileSize="10MB" maxTotalFileSize="10MB">
            <x-slot name="acceptedFileTypes">
            'application/zip'
            </x-slot>
            <x-slot name="description">
            {{__('Go to Favicon Generator website and upload the zip file')}} <a target="_blank" title="Favicon Generator" href="https://realfavicongenerator.net/">https://realfavicongenerator.net/</a>
            </x-slot>
            </x-starterkid::starterkid.form.file>
            
            
            <div class="mt-5">
            <x-starterkid::starterkid.button-secondary type="button" wire:click="resetSettings">{{__('Reset settings')}}</x-starterkid::starterkid.button-secondary>
            </div>
            <div class="mt-5">
            <x-starterkid::starterkid.button-secondary type="button" wire:click="clearTempFolders">{{__('Remove temporary files remnants')}}</x-starterkid::starterkid.button-secondary>
            </div>
            <div class="mt-5">
            <x-starterkid::starterkid.button-secondary type="button" wire:click="clearAllCaches">{{__('Clear cache')}}</x-starterkid::starterkid.button-secondary>
            </div>
            
            
        </x-starterkid::starterkid.form>


    </x-starterkid::starterkid.card>
    </div>