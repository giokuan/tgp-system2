<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Officer;

class CouncilOfficers extends Component
{

    public $chairmanName;
    public $position;
    public $chairmanNamePhoto;

    public $viceChairmanInternal;
    public $vicePositionInternal;
    public $viceChairmanInternalPhoto;

    public $viceChairmanExternal;
    public $vicePositionExternal;
    public $viceChairmanExternalPhoto;

    public $secretary;
    public $secretaryPosition;
    public $secretaryPhoto;

    public $treasurer;
    public $treasurerPosition;
    public $treasurerPhoto;

    public $auditor;
    public $auditorPosition;
    public $auditorPhoto;

    public $judicial1;
    public $judicial1Position;
    public $judicial1Photo;

    public $judicial2;
    public $judicial2Position;
    public $judicial2Photo;

    public $judicial3;
    public $judicial3Position;
    public $judicial3Photo;

    public $judicial4;
    public $judicial4Position;
    public $judicial4Photo;

    public $adviser1;
    public $adviser1Position;
    public $adviser1Photo;

    public $adviser2;
    public $adviser2Position;
    public $adviser2Photo;

    public $adviser3;
    public $adviser3Position;
    public $adviser3Photo;

    public $projectOfficer;
    public $projectOfficerPosition;
    public $projectOfficerPhoto;


    

    

    public function mount()
    {
        // Retrieve the name of the user where position is 'Chairman'
        $chairman = Officer::where('position', 'Chairman')->first();
        // $this->chairmanName = $chairman ? $chairman->name : 'Not Found';
        if ($chairman) {
            $this->chairmanName = $chairman->name;
            $this->position = $chairman->position;
            $this->chairmanNamePhoto = $chairman->photo;

        } else {
            $this->chairmanName = 'Not Found';
            $this->position = 'Not Found';
        }

        $viceChairmanInternal = Officer::where('position', 'Vice Chairman Internal')->first();
        if ($viceChairmanInternal) {
            $this->viceChairmanInternal = $viceChairmanInternal->name;
            $this->vicePositionInternal = $viceChairmanInternal->position;
            $this->viceChairmanInternalPhoto = $viceChairmanInternal->photo;
        } else {
            $this->viceChairmanInternal = 'Not Found';
            $this->vicePositionInternal = 'Not Found';
            $this->viceChairmanInternalPhoto = null;
        }

        $viceChairmanExternal = Officer::where('position', 'Vice Chairman External')->first();
        if ($viceChairmanExternal) {
            $this->viceChairmanExternal = $viceChairmanExternal->name;
            $this->vicePositionExternal = $viceChairmanExternal->position;
            $this->viceChairmanExternalPhoto = $viceChairmanExternal->photo;
        } else {
            $this->viceChairmanExternal = 'Not Found';
            $this->vicePositionExternal = 'Not Found';
            $this->viceChairmanExternalPhoto = null;
        }

        $secretary = Officer::where('position', 'Executive Secretary')->first();
        if ($secretary) {
            $this->secretary = $secretary->name;
            $this->secretaryPosition = $secretary->position;
            $this->secretaryPhoto = $secretary->photo;

        } else {
            $this->secretary = 'Not Found';
            $this->secretaryPosition = 'Not Found';
            $this->secretaryPhoto = null;
        }

        $treasurer = Officer::where('position', 'Executive Treasurer')->first();
        if ($treasurer) {
            $this->treasurer = $treasurer->name;
            $this->treasurerPosition = $treasurer->position;
            $this->treasurerPhoto = $treasurer->photo;

        } else {
            $this->treasurer = 'Not Found';
            $this->treasurerPosition = 'Not Found';
            $this->treasurerPhoto = null;
        }

        $auditor = Officer::where('position', 'Executive Auditor')->first();
        if ($auditor) {
            $this->auditor = $auditor->name;
            $this->auditorPosition = $auditor->position;
            $this->auditorPhoto = $auditor->photo;

        } else {
            $this->auditor = 'Not Found';
            $this->auditorPosition = 'Not Found';
            $this->auditorPhoto = null;
        }

        $judicial1 = Officer::where('position', 'Judicial 1')->first();
        if ($judicial1) {
            $this->judicial1 = $judicial1->name;
            $this->judicial1Position = $judicial1->position;
            $this->judicial1Photo = $judicial1->photo;

        } else {
            $this->judicial1 = 'Not Found';
            $this->judicial1Position = 'Not Found';
            $this->judicial1Photo = null;
        }

        $judicial2 = Officer::where('position', 'Judicial 2')->first();
        if ($judicial2) {
            $this->judicial2 = $judicial2->name;
            $this->judicial2Position = $judicial2->position;
            $this->judicial2Photo = $judicial2->photo;
        } else {
            $this->judicial2 = 'Not Found';
            $this->judicial2Position = 'Not Found';
            $this->judicial2Photo = null;
        }

        $judicial3 = Officer::where('position', 'Judicial 3')->first();
        if ($judicial3) {
            $this->judicial3 = $judicial3->name;
            $this->judicial3Position = $judicial3->position;
            $this->judicial3Photo = $judicial3->photo;
        } else {
            $this->judicial3 = 'Not Found';
            $this->judicial3Position = 'Not Found';
            $this->judicial3Photo = null;
        }

        $judicial4 = Officer::where('position', 'Judicial 4')->first();
        if ($judicial4) {
            $this->judicial4 = $judicial4->name;
            $this->judicial4Position = $judicial4->position;
            $this->judicial4Photo = $judicial4->photo;
        } else {
            $this->judicial4 = 'Not Found';
            $this->judicial4Position = 'Not Found';
            $this->judicial4Photo = null;
        }

        $adviser1 = Officer::where('position', 'Adviser 1')->first();
        if ($adviser1) {
            $this->adviser1 = $adviser1->name;
            $this->adviser1Position = $adviser1->position;
            $this->adviser1Photo = $adviser1->photo;

        } else {
            $this->adviser1 = 'Not Found';
            $this->adviser1Position = 'Not Found';
            $this->adviser1Photo = null;
        }

        $adviser2 = Officer::where('position', 'Adviser 2')->first();
        if ($adviser2) {
            $this->adviser2 = $adviser2->name;
            $this->adviser2Position = $adviser2->position;
            $this->adviser2Photo = $adviser2->photo;
        } else {
            $this->adviser2 = 'Not Found';
            $this->adviser2Position = 'Not Found';
            $this->adviser2Photo = null;
        }

        $adviser3 = Officer::where('position', 'Adviser 3')->first();
        if ($adviser3) {
            $this->adviser3 = $adviser3->name;
            $this->adviser3Position = $adviser3->position;
            $this->adviser3Photo = $adviser3->photo;

        } else {
            $this->adviser3 = 'Not Found';
            $this->adviser3Position = 'Not Found';
            $this->adviser3Photo = null;
        }

        $projectOfficer = Officer::where('position', 'Project Officer')->first();
        if ($projectOfficer) {
            $this->projectOfficer = $projectOfficer->name;
            $this->projectOfficerPosition = $projectOfficer->position;
            $this->projectOfficerPhoto = $projectOfficer->photo;
        } else {
            $this->projectOfficer = 'Not Found';
            $this->projectOfficerPosition = 'Not Found';
            $this->projectOfficerPhoto = null;
        }
    }

    public function render()
    {
        return view('livewire.council-officers');
    }
}
