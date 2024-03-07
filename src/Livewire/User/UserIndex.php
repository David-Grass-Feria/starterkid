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
            foreach($findRecord->ownedTeams as $ownedTeam){
                $ownedTeam->delete();
            }
            $findRecord->personalTeam()->delete();
            
            
            $findRecord->delete();

        }

        $this->selected = [];


    }


    public function render()
    {

        $users = \App\Models\User::query($this->search)
            ->select('id', 'name', 'email')
            ->where('id', 'REGEXP', $this->search)
            ->orWhere('name', 'REGEXP', $this->search)
            ->orWhere('email', 'REGEXP', $this->search)
            ->orderBy($this->orderBy, $this->sort)
            ->paginate($this->perPage);

        return view('starterkid::livewire.user.user-index',['users' => $users]);
        


    }
}
