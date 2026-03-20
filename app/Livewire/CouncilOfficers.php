<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Officer;

class CouncilOfficers extends Component
{
    public $layoutGroups = [];

    public function mount()
    {
        // Define all positions we want to query
        $allPositions = [
            'Chairman', 'Vice Chairman Internal', 'Vice Chairman External',
            'Executive Secretary', 'Executive Treasurer', 'Executive Auditor',
            'Judicial 1', 'Judicial 2', 'Judicial 3', 'Judicial 4',
            'Adviser 1', 'Adviser 2', 'Adviser 3', 'Project Officer',
        ];

        // Fetch all matching officers in a SINGLE query instead of 14 separate queries
        $fetchedOfficers = Officer::whereIn('position', $allPositions)->get()->keyBy('position');

        // Structure the array by row layout to make the frontend clean and dynamic
        $this->layoutGroups = [
            [
                'gridClass' => 'w-full max-w-sm',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Chairman'])
            ],
            [
                'gridClass' => 'grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-4xl',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Vice Chairman Internal', 'Vice Chairman External'])
            ],
            [
                'gridClass' => 'grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 w-full max-w-6xl',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Executive Secretary', 'Executive Treasurer', 'Executive Auditor'])
            ],
            [
                'gridClass' => 'grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 w-full max-w-7xl',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Judicial 1', 'Judicial 2', 'Judicial 3', 'Judicial 4'])
            ],
            [
                'gridClass' => 'grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 w-full max-w-6xl',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Adviser 1', 'Adviser 2', 'Adviser 3'])
            ],
            [
                'gridClass' => 'w-full max-w-sm',
                'officers' => $this->getOfficersByPositions($fetchedOfficers, ['Project Officer'])
            ],
        ];
    }

    private function getOfficersByPositions($fetchedOfficers, array $positions)
    {
        $officers = [];
        
        foreach ($positions as $position) {
            $officer = $fetchedOfficers->get($position);
            
            // For positions like "Judicial 1" or "Adviser 2", we remove the number for the frontend display
            $displayPosition = preg_replace('/\s\d+$/', '', $position);

            $officers[] = [
                'name' => $officer ? $officer->name : 'Not Found',
                'position' => $position,
                'display_position' => $displayPosition,
                'photo' => $officer ? $officer->photo : null,
            ];
        }
        
        return $officers;
    }

    public function render()
    {
        return view('livewire.council-officers');
    }
}
