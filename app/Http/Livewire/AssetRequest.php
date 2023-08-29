<?php

namespace App\Http\Livewire;
use App\Models\Asset;
use App\Models\AssetRequest as AssetRequests;
use App\Models\Type;
use Carbon\Carbon;
use Livewire\Component;

class AssetRequest extends Component
{
    // public $type_id;
    public $assets;

    public $asset_id;
    public $type_id;
    public $quantity;
    public $specification;
    public $purpose;
    // public $request_date;
    public function mount()
    {
        $this->types = Type::all();
        $this->assets = Asset::where('type_id', $this->types->first()->id)->get();
    }

    public function updatedTypeId($value)
    {
        $this->assets = Asset::where('type_id', $value)->get();
        $this->asset_id = null; // Reset the selected asset ID
    }


    public function save()
    {
        $user = auth()->user();

        $assetRequest = AssetRequests::create([
            'user_id' => $user->id,
            'asset_id' => $this->asset_id,
            'quantity' => $this->quantity,
            'purpose' => $this->purpose,
            'specification' => $this->specification,
            'request_date' => Carbon::today()->toDateString(),
        ]);

        session()->flash('success', 'Asset request submitted successfully.');

    }


    public function render()
    {

        return view('livewire.asset-request');
    }
}
