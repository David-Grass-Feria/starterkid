

@if(Cache::has('favicon'))



<link rel="apple-touch-icon" sizes="180x180" href="{{url('/')}}/storage/{{$settingsFaviconFolderId}}/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('/')}}/storage/{{$settingsFaviconFolderId}}/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('/')}}/storage/{{$settingsFaviconFolderId}}/favicon-16x16.png">
<link rel="manifest" href="{{url('/')}}/storage/{{$settingsFaviconFolderId}}/site.webmanifest">
<link rel="mask-icon" href="{{url('/')}}/storage/{{$settingsFaviconFolderId}}/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
@else
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">

<link rel="mask-icon" href="{{asset('favicons/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
@endif