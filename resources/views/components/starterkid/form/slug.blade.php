<div class="mb-5">
    <div class="flex items-center">
        <x-starterkid::starterkid.label for="{{$for}}">{{$label}}</x-starterkid::starterkid.label>
        @if($attributes->get('required'))
        <x-starterkid::starterkid.required />
        @endif
        </div>
    <div class="flex rounded-md shadow-sm">
      <span class="inline-flex items-center rounded-l-md border border-r-0 border-gray-300 px-3 text-gray-500 sm:text-sm">{{$slug ?? 'https://'}}</span>
      <input {{$attributes->merge(['class' => 'block w-full min-w-0 flex-1 rounded-none rounded-r-md border-0 py-1.5 settingFontColor ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset settingPrimaryColorFocus sm:text-sm sm:leading-6'])}}>
   
    </div>
    @if(isset($description))
    <x-starterkid::starterkid.input-description>{{$description}}</x-starterkid::starterkid.input-description>
    @endif
    <x-starterkid::starterkid.error for="{{$for}}"/>
  </div>