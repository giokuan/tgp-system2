<?php

namespace App\Livewire;

use Livewire\Component;

class Bylaws extends Component
{

    public $show = false; // Tracks the state of the collapse component

    public function toggle()
    {
        $this->show = !$this->show;
    }

    
    public function render()
    {
        return view('livewire.bylaws');
    }
}
