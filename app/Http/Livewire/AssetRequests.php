<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AssetRequest;
class AssetRequests extends Component
{

    public $assetRequests;

    public function mount()
    {
        $this->loadAssetRequests();
    }

    public function loadAssetRequests()
    {
        // Fetch asset requests from the database or any other source
        $user = auth()->user();
        if ($user->hasRole('Admin')) {
        $this->assetRequests = AssetRequest::all();
        }else{
            $this->assetRequests = AssetRequest::where('user_id', $user->id)->latest()->get();
        }

    }

    public function updateAssetRequestStatus($assetRequestId, $status)
    {
        // Find the asset request by ID and update its status
        $assetRequest = AssetRequest::findOrFail($assetRequestId);
        $assetRequest->status = $status;
        $assetRequest->save();

        $this->loadAssetRequests(); // Reload asset requests after updating
        session()->flash('success', 'Asset request status updated successfully!');
        $this->emit('statusUpdated'); // Emit an event to trigger a Livewire refresh
    }

    public function render()
    {

        $user = auth()->user();

    if ($user->hasRole('Admin')) {
        $assetRequests = AssetRequest::latest()->get();
    } else {
        $assetRequests = AssetRequest::where('user_id', $user->id)->latest()->get();
    }

    return view('livewire.asset-requests', [
        'assetRequests' => $assetRequests
    ]);

    }
}
