<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $search;
    protected $queryString = ['search'];

 


    public function render()
    {
   

        return view('livewire.users-table', [
            'users' => User::where('name', 'like', '%'.$this->search.'%')->get(),
        ]);

 
    }
}
