<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class KaryawanIndex extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.karyawan-index', [
            'users' => User::latest()->paginate(10)
        ]);
    }
}
