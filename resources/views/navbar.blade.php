<x-starterkid::starterkid.nav-link href="{{route('dashboard')}}" :active="request()->routeIs(['dashboard'])">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5 h-5" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
      </svg>
      {{__('Dashboard')}}
</x-starterkid::starterkid.nav-link>

@include('extra-links')


@foreach($navLinks as $link)
  @if(Route::has($link['route']))
@can($link['permission'], $link['model'])
<x-starterkid::starterkid.nav-link href="{{ route($link['route']) }}" :active="request()->routeIs($link['active']),">
        {!! $link['icon'] !!}
        {{ $link['title_' . config('app.locale')] ?? $link['title_en'] }}
    </x-starterkid::starterkid.nav-link>
  
@endcan
@endif
@endforeach



  @if(Route::has('services.index'))
  @can('viewAny',\GrassFeria\StarterkidService\Models\Service::class)
  <x-starterkid::starterkid.nav-link href="{{route('services.index')}}" :active="request()->routeIs(['services.index','services.create','services.edit'])">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
      <path d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5"/>
      <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z"/>
    </svg>
        {{__('Services')}}
    </x-starterkid::starterkid.nav-link>
    @endcan
    @endif


    @if(Route::has('blogposts.index'))
    @can('viewAny',\GrassFeria\StarterkidBlog\Models\BlogPost::class)
    <x-starterkid::starterkid.nav-link href="{{route('blogposts.index')}}" :active="request()->routeIs(['blogposts.index','blogposts.create','blogposts.edit'])">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
      </svg>
          {{__('Blog')}}
      </x-starterkid::starterkid.nav-link>
      @endcan
      @endif

      @if(Route::has('wikis.index'))
      @can('viewAny',\GrassFeria\StarterkidWiki\Models\Wiki::class)
      <x-starterkid::starterkid.nav-link href="{{route('wikis.index')}}" :active="request()->routeIs(['wikis.index','wikis.create','wikis.edit'])">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-wikipedia h-5 w-5" viewBox="0 0 16 16">
          <path d="M8.835 3.003c.828-.006 2.688 0 2.688 0l.033.03v.288q0 .12-.133.12c-.433.02-.522.063-.68.29-.087.126-.258.393-.435.694l-1.52 2.843-.043.089 1.858 3.801.113.031 2.926-6.946q.152-.42-.044-.595c-.132-.114-.224-.18-.563-.195l-.275-.014a.16.16 0 0 1-.096-.035.1.1 0 0 1-.046-.084v-.289l.042-.03h3.306l.034.03v.29q0 .117-.133.117-.65.03-.962.281a1.64 1.64 0 0 0-.488.704s-2.691 6.16-3.612 8.208c-.353.672-.7.61-1.004-.019A224 224 0 0 1 8.044 8.81c-.623 1.285-1.475 3.026-1.898 3.81-.411.715-.75.622-1.02.019-.45-1.065-1.131-2.519-1.817-3.982-.735-1.569-1.475-3.149-1.943-4.272-.167-.4-.293-.657-.412-.759q-.18-.15-.746-.18Q0 3.421 0 3.341v-.303l.034-.03c.615-.003 3.594 0 3.594 0l.034.03v.288q0 .119-.15.118l-.375.016q-.483.02-.483.288-.002.125.109.4c.72 1.753 3.207 6.998 3.207 6.998l.091.023 1.603-3.197-.32-.71L6.24 5.095s-.213-.433-.286-.577l-.098-.196c-.387-.77-.411-.82-.865-.88-.137-.017-.208-.035-.208-.102v-.304l.041-.03h2.853l.075.024v.303q0 .104-.15.104l-.206.03c-.523.04-.438.254-.09.946l1.057 2.163 1.17-2.332c.195-.427.155-.534.074-.633-.046-.055-.202-.144-.54-.158l-.133-.015a.16.16 0 0 1-.096-.034.1.1 0 0 1-.045-.085v-.288l.041-.03Z"/>
        </svg>
            {{__('Wiki')}}
        </x-starterkid::starterkid.nav-link>
        @endcan
        @endif

      @can('update',\GrassFeria\Starterkid\Models\Setting::class)
      <x-starterkid::starterkid.nav-link href="{{route('settings.edit',1)}}" :active="request()->routeIs(['settings.edit','settings.plugin','setting.migrate'])">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
        </svg>
            {{__('Settings')}}
        </x-starterkid::starterkid.nav-link>
        @endcan








