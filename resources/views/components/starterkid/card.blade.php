<div class="divide-y divide-gray-200 overflow-hidden bg-white rounded-md xl:max-w-7xl xl:mx-auto shadow-sm">
    @if(isset($header))
    <div class="px-4 py-5 sm:px-6 flex items-center space-x-3 bg-white">
      {{$header}}
    </div>
    @endif
    <div class="px-4 py-5 sm:p-6">
     {{$slot}}
    </div>
    @if(isset($footer))
    <div class="px-4 py-4 sm:px-6 flex items-center space-x-3">
     {{$footer}}
    </div>
    @endif
  </div>
