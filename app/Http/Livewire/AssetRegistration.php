<?php

namespace App\Http\Livewire;
use App\Models\Asset;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Supplier;
use App\Models\Type;
use Livewire\Component;

class AssetRegistration extends Component
{

    public $category_id;
    public $type_id;
    public $name;
    public $manufacturer_id;
    public $supplier_id;
    public $purchase_price;
    public $purchase_date;
    public $serial_number;
    public $barcode;
    public $description;

    public $categories;
    public $suppliers;
    public $types;
    public $manufacturers;

    public function mount()
    {
        $this->categories = Category::all();
        $this->suppliers = Supplier::all();
        $this->manufacturers = Manufacturer::all();

        // Initialize the types based on the first category by default
        $this->types = Type::where('category_id', $this->categories->first()->id)->get();
    }

    public function updatedCategoryId($value)
    {
        // Filter the types based on the selected category
        $this->types = Type::where('category_id', $value)->get();
        $this->type_id = null; // Reset the selected type
    }

    public function render()
    {
        return view('livewire.asset-registration');
    }

    public function save()
    {
        $this->validate([
            'category_id' => 'required',
            'type_id' => 'required',
            'name' => 'required',
            'manufacturer_id' => 'required',
            'supplier_id' => 'required',
            'purchase_price' => 'required',
            'purchase_date' => 'required',
            'serial_number' => 'unique:assets',
            'barcode' => 'unique:assets',
        ]);

        $asset = Asset::create([
            'category_id' => $this->category_id,
            'type_id' => $this->type_id,
            'name' => $this->name,
            'manufacturer_id' => $this->manufacturer_id,
            'supplier_id' => $this->supplier_id,
            'purchase_price' => $this->purchase_price,
            'purchase_date' => $this->purchase_date,
            'serial_number' => $this->serial_number,
            'barcode' => $this->barcode,
            'description' => $this->description,
        ]);

        session()->flash('success', 'Asset saved successfully!');

        // return Redirect::to('/create-asset')->with('success', 'Asset saved successfully!');
    }
}
