<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AssetAssignment;
class AssignedAssets extends Component
{
    public function render()
    {
        $assetAssignments=AssetAssignment::all();
        return view('livewire.assigned-assets', compact('assetAssignments'));
    }
}
