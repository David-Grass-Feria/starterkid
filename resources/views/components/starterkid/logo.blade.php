<img {{$attributes}} src="{{ Cache::has('logo') ? Cache::get('logo') : asset('/logo.svg') }}">
