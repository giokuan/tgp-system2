<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Member;

class ViewMember extends Component
{

    public $member;

    public function mount($id)
    {
        // Load the member data based on the provided ID
        $this->member = Member::find($id);

        // Handle case where member is not found
        if (!$this->member) {
            session()->flash('error', 'Member not found.');
            return redirect()->route('member-view', ['id' => $id]); // Redirect or handle accordingly
        }
    }


    public function render()
    {
        return view('livewire.view-member', [
            'member' => $this->member, // Pass the member data to the view
        ]);
    }
}
