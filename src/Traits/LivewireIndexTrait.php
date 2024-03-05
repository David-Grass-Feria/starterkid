<?php

namespace GrassFeria\Starterkid\Traits;

use App\Jobs\DeleteMediaOnDisk;
use Livewire\WithPagination;



trait LivewireIndexTrait

{
    use WithPagination;
    public $search;
    public $orderBy = 'id';
    public $sort = 'DESC';
    public $perPage = 10;
    public $selected = [];

    public function updatedSearch()
    {
        $this->resetPage();

    }

    public function resetSelected()
    {
        $this->selected = [];
    }




}
