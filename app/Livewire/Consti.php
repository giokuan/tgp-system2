<?php

namespace App\Livewire;

use Livewire\Component;

class Consti extends Component
{

    public $group = null; 
    public $loadedGroups = [];

// Tracks the currently open group

    public function toggle($groupName)
    {
        // If the clicked group is already open, close it; otherwise, open it
        // $this->group = $this->group === $groupName ? null : $groupName;
        $this->group = ($this->group === $groupName) ? null : $groupName;
    
    // Emit a re-render event
    // $this->emit('reRender');
    }




    
    public function render()
    {
      
        return view('livewire.consti');
    }
}
