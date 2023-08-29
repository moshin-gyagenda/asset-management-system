<?php

namespace App\Http\Livewire;
use App\Models\AssetAssignment as AssetAssignments;
use App\Models\Asset;
use App\Models\User;
use Livewire\Component;

class AssetAssignment extends Component
{
    public $selectedAsset;
    public $selectedEmployee;
    public $startDate;
    public $endDate;
    public $barcode;
    public $serialNumber;

    public function populateAssetDetails()
    {
        if ($this->selectedAsset) {
            // Retrieve the asset details based on the selected asset ID
            $asset = Asset::findOrFail($this->selectedAsset);

            // Update the barcode and serialNumber properties with the asset details
            $this->barcode = $asset->barcode;
            $this->serialNumber = $asset->serial_number;
        } else {
            // Clear the barcode and serialNumber properties if no asset is selected
            $this->barcode = null;
            $this->serialNumber = null;
        }
    }
    public function assignAsset()
    {

        // Retrieve the selected asset and employee IDs from the Livewire properties

        AssetAssignments::create([
            'asset_id' => $this->selectedAsset,
            'user_id' => $this->selectedEmployee,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
            'assignment_date' => now(),
        ]);

        // Clear the selected values and input fields after assignment
        $this->selectedAsset = null;
        $this->selectedEmployee = null;
        $this->startDate = null;
        $this->endDate = null;

        // Show a success message
        session()->flash('success', 'Asset assigned successfully.');

        // Emit an event to trigger a Livewire refresh
        $this->emit('assetAssigned');
    }
    public function render()
    {
        $assets = Asset::all();
        $employees = User::all();

        return view('livewire.asset-assignment', [
            'assets' => $assets,
            'employees' => $employees,
        ]);
    }
}
