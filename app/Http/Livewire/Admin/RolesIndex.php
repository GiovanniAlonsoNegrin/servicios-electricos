<?php

namespace App\Http\Livewire\Admin;

use App\Models\Role;
use Livewire\Component;

use Livewire\WithPagination;

class RolesIndex extends Component
{

    use WithPagination;

    public $search;

    protected $paginationTheme = "bootstrap";

    public function updatingSearch(){
        //Reseteamos la paginacion
        $this->resetPage();
    }

    public function render()
    {
        sleep(1);

        $roles = Role::where('title', 'LIKE', '%' . $this->search . '%')
            ->paginate();

        return view('livewire.admin.roles-index', compact('roles'));
    }
}
