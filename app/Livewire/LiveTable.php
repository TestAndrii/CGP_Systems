<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class LiveTable extends Component
{
    public $users;
    public function render()
    {
        $this->users = User::sortByCountImages(20);
        return view('livewire.live-table');
    }
}
