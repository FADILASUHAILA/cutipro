<?php

namespace App\Livewire\Karyawan;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.karyawan.index',[
            'users' => User::latest()->paginate(5),
        ]);
    }
}
