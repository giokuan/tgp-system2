<?php

namespace App\Livewire;

use Livewire\Component;

class Bylaws extends Component
{

    public $group = null; // Tracks the currently open group

    public function toggle($groupName)
    {
        // If the clicked group is already open, close it; otherwise, open it
        $this->group = $this->group === $groupName ? null : $groupName;
    }


    
    public function render()
    {
        return view('livewire.bylaws');
    }
}
