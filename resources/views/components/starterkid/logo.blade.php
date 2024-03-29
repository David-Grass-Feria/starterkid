<img {{$attributes}} src="{{ Cache::has($conversion ?? 'logo') ? Cache::get($conversion ?? 'logo') : asset('/logo.png') }}">
