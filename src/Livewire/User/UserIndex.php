<?php

namespace GrassFeria\Starterkid\Livewire\User;


use Livewire\Component;
use GrassFeria\Starterkid\Traits\LivewireIndexTrait;
use Illuminate\Support\Facades\Gate;




class UserIndex extends Component
{

    use LivewireIndexTrait;




    public function mount()
    {
        $this->authorize('viewAny',\App\Models\User::class);
    }



    public function destroyRecords()
    {

        $this->authorize('delete',\App\Models\User::class);
        foreach ($this->selected as $recordId) {
            $findRecord = \App\Models\User::find($recordId);
            if($findRecord->role == config('starterkid.global_admin')){
                abort(403,__('You can not delete a '.config('starterkid.global_admin')));
            }
            $findRecord->delete();

        }

        $this->selected = [];


    }


    public function render()
    {

        $users = \App\Models\User::query($this->search)
            ->select('id', 'name', 'email','role')
            ->where('id', 'like', '%' . $this->search . '%')
            ->orwhere('name', 'like', '%' . $this->search . '%')
            ->orwhere('email', 'like', '%' . $this->search . '%')
            ->orwhere('role', 'like', '%' . $this->search . '%')
            ->orderBy($this->orderBy, $this->sort)
            ->paginate($this->perPage);

        return view('starterkid::livewire.user.user-index',['users' => $users]);
        


    }
}
