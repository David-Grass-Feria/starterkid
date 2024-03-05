
<div x-data x-init="initRange()">
    @push('scripts')
    <script>
    function initRange(){
        const {{$for}}Value = document.querySelector("#{{$for}}-value");
    const {{$for}}Input = document.querySelector("#{{$for}}");
    {{$for}}Value.textContent = {{$for}}Input.value;
    {{$for}}Input.addEventListener("input", (event) => {
        {{$for}}Value.textContent = event.target.value;
    
    
    });
    }
    
    </script>
    @endpush
    

<div class="mb-5">
    <div class="flex items-center">
        <x-starterkid::starterkid.label for="{{$for}}">{{$label}}</x-starterkid::starterkid.label>
        @if($attributes->get('required'))
        <x-starterkid::starterkid.required />
        @endif
        </div>
    <input {{$attributes}} type="range" class="w-full"/>
    @if(isset($description))
<x-starterkid::starterkid.input-description>{{$description}}</x-starterkid::starterkid.input-description>
@endif
    <p>Value: <output id="{{$for}}-value"></output></p>
    <x-starterkid::starterkid.error for="{{$for}}"/>
    </div>


</div>