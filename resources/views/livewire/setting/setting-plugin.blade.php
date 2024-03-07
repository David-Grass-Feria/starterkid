<div>
    <x-starterkid::starterkid.card>
            <x-slot name="header">
            <a href="{{route('settings.edit',1)}}" title="{{__('Settings')}}">
            <x-starterkid::starterkid.button-secondary type="button">{{__('Back')}}</x-starterkid::starterkid.button-secondary>
            </a>
            
           
            </x-slot>
            <div class="bg-gray-200 p-5 settingFontColor">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                
                @foreach($plugins as $plugin)
                
                
                @if($plugin['active'])
                <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow relative">
                 @else
                 <li class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow relative opacity-40">
                 @endif 
                  
                  <div class="flex flex-1 flex-col p-8">
                    <img class="mx-auto h-32 w-32 flex-shrink-0 rounded-sm" src="{{$plugin['composer_info']['extra']['logo-url'] ?? ''}}" alt="{{$plugin['composer_info']['extra']['logo-url'] ?? ''}}">
                    <h3 class="mt-2 text-xs font-semibold">{{$plugin['composer_info']['extra']['thumb-vendor'] ?? ''}}</h3>
                    <a class="settingFontColor" target="_blank" href="{{$plugin['composer_info']['homepage'] ?? ''}}">
                    <h3 class="mt-6 underline text-lg font-semibold">{{$plugin['composer_info']['extra']['thumb-name'] ?? ''}}</h3>
                    </a>
                    <dl class="mt-1 flex flex-grow flex-col justify-between">
                      <dt class="sr-only">Title</dt>
                      <dd class="text-xs">{{$plugin['composer_info']['description'] ?? ''}}</dd>
                      <dd class="mt-3">
                       
                        @if($plugin['active'])
                        <x-starterkid::starterkid.badge-success>{{__('Enabled')}}</x-starterkid::starterkid.badge-success>
                        @else
                        <x-starterkid::starterkid.badge-danger>{{__('Disabled')}}</x-starterkid::starterkid.badge-danger>
                        @endif
                       
                      </dd>
                    </dl>
                  </div>
                  <div>
                    <div class="-mt-px flex items-center justify-around p-3">
                     
                     <span class="text-xs float-right">{{__('Version:')}} {{$plugin['composer_info']['minimum-stability'] ?? ''}}</span>
                    
                   
                    </button>
                    </div>
                   
                  </div>
                </li>
                @endforeach
            
              </ul>
            </div>
             
            
    </x-starterkid::starterkid.card>
    </div>