<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class ReportStatus extends Component
{

    public $totalMembers;
    public $totalChapters;
    public $totalActive;
    public $totalInactive;

    public function mount()
    {
        $this->totalMembers = Member::count();
        $this->totalChapters = Member::distinct('current_chapter')->count('current_chapter');
        $this->totalActive = Member::where('status', 'active')->count();
        $this->totalInactive = Member::where('status', 'inactive')->count();
    }


    public function render()
    {
        return view('livewire.report-status');
    }
}
