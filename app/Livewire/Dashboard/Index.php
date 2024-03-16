<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index',[
            "title" => "Dashboard",
            // "positionCount" => Position::count(),
            "userCount" => User::count()
        ]);
    }
}
