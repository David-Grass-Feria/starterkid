<div class="px-4 py-5 sm:p-6">
    <dt class="text-base font-normal text-gray-900">{{$description}}</dt>
    <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
      <div class="flex items-baseline text-2xl font-semibold text-primary">
        {{$total}}
        @if(isset($from))
        <span class="ml-2 text-sm font-medium text-gray-500">from {{$from}}</span>
        @endif
      </div>

      @if(isset($increasedBy))
      <div class="inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium bg-green-100 text-green-800 md:mt-2 lg:mt-0">
        <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10 17a.75.75 0 01-.75-.75V5.612L5.29 9.77a.75.75 0 01-1.08-1.04l5.25-5.5a.75.75 0 011.08 0l5.25 5.5a.75.75 0 11-1.08 1.04l-3.96-4.158V16.25A.75.75 0 0110 17z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Increased by </span>
        {{$increasedBy}}
      </div>
      @endif

      @if(isset($decreasedBy))
      <div class="inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium bg-red-100 text-red-800 md:mt-2 lg:mt-0">
        <svg class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-red-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10 3a.75.75 0 01.75.75v10.638l3.96-4.158a.75.75 0 111.08 1.04l-5.25 5.5a.75.75 0 01-1.08 0l-5.25-5.5a.75.75 0 111.08-1.04l3.96 4.158V3.75A.75.75 0 0110 3z" clip-rule="evenodd" />
        </svg>
        <span class="sr-only"> Decreased by </span>
        {{$decreasedBy}}
      </div>
      @endif


    </dd>
  </div>