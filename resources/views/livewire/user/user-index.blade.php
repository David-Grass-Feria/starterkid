<div>
    <x-starterkid::starterkid.card>
        <x-slot name="header">
        @can('create',\App\Models\User::class)
        <a href="{{route('users.create')}}" title="{{__('Create user')}}">
        <x-starterkid::starterkid.button-primary type="button">{{__('Create user')}}</x-starterkid::starterkid.button-primary>
        </a>
        @endcan
        </x-slot>

    <x-starterkid::starterkid.table-panel :selected="$selected">
    <x-slot name="tableHeader">
    <x-starterkid::starterkid.input wire:model.live.debounce.600ms="search" id="search" type="search" placeholder="{{__('Search')}}" class="w-full xl:w-1/4"/>
  
    <x-starterkid::starterkid.input-select wire:model.live="perPage" class="w-full xl:w-1/6">
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option>
    </x-starterkid::starterkid.input-select>
    <x-starterkid::starterkid.input-select wire:model.live="orderBy" class="w-full xl:w-1/6">
        <option value="id">{{__('ID')}}</option>
        <option value="name">{{__('Name')}}</option>
        <option value="email">{{__('Email')}}</option>
    </x-starterkid::starterkid.input-select>
    <x-starterkid::starterkid.input-select wire:model.live="sort" class="w-full xl:w-1/6">
        <option value="ASC">{{__('ASC')}}</option>
        <option value="DESC">{{__('DESC')}}</option>
       </x-starterkid::starterkid.input-select>
    </x-slot>
    <thead>
    <x-starterkid::starterkid.tr>
    <x-starterkid::starterkid.th></x-starterkid::starterkid.th>
    <x-starterkid::starterkid.th>{{__('ID')}}</x-starterkid::starterkid.th>
    <x-starterkid::starterkid.th>{{__('Role')}}</x-starterkid::starterkid.th>
    <x-starterkid::starterkid.th>{{__('Name')}}</x-starterkid::starterkid.th>
    <x-starterkid::starterkid.th>{{__('Email')}}</x-starterkid::starterkid.th>
    <x-starterkid::starterkid.th>{{__('Edit')}}</x-starterkid::starterkid.th>
    </x-starterkid::starterkid.tr>
    </thead>
    <x-starterkid::starterkid.tbody>

    @foreach($users as $user)
    <x-starterkid::starterkid.tr wire:key="tr_row_{{$user->id}}">
        <x-starterkid::starterkid.td>
        @can('delete',\App\Models\User::class)
        @if($user->role !== config('starterkid.global_admin'))
            <x-starterkid::starterkid.input-checkbox wire:model.live="selected" wire:key="{{$user->id}}" value="{{$user->id}}" />
        @endif
        @endcan
        </x-starterkid::starterkid.td>
        <x-starterkid::starterkid.td>{{$user->id}}</x-starterkid::starterkid.td>
        <x-starterkid::starterkid.td>{{ucfirst($user->role)}}</x-starterkid::starterkid.td>
        <x-starterkid::starterkid.td>{{$user->name}}</x-starterkid::starterkid.td>
        <x-starterkid::starterkid.td>{{$user->email}}</x-starterkid::starterkid.td>
        

        <x-starterkid::starterkid.td>
            
            @can('update',\App\Models\User::class)
            
           
            
            
            @if($user->role !== config('starterkid.global_admin'))
            <a href="{{route('users.edit',$user->id)}}" title="{{__('Edit')}}">
                <x-starterkid::starterkid.button-primary type="button">{{__('Edit')}}</x-starterkid::starterkid.button-primary>
            </a>
            @endif
          
            @endcan
        </x-starterkid::starterkid.td>
         </x-starterkid::starterkid.tr>
    @endforeach

    </x-starterkid::starterkid.tbody>
    <x-slot name="pagination">
        {{$users->links()}}
    </x-slot>
    </x-starterkid::starterkid.table-panel>

</x-starterkid::starterkid.card>
</div>