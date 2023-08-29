<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\Category;
use App\Models\Manufacturer;
use App\Models\Supplier;
use App\Models\Type;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assets=Asset::latest()->get();
        return view('dashboard.asset-list', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $suppliers=Supplier::all();
        $types=Type::all();
        $manufacturers=Manufacturer::all();
        return view('dashboard.create-asset', compact('manufacturers','types','suppliers','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Validate the form data
        $validatedData = $request->validate([
            'category_id' => 'required',
            'type_id' => 'required',
            'name' => 'required|string',
            'manufacturer_id' => 'required',
            'supplier_id' => 'required',
            'purchase_price' => 'required|numeric',
            'purchase_date' => 'required|date',
            'serial_number' => 'nullable|string',
            'barcode' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        // Create a new asset
        $asset = new Asset();
        $asset->category_id = $request->category_id;
        $asset->type_id = $request->type_id;
        $asset->name = $request->name;
        $asset->manufacturer_id = $request->manufacturer_id;
        $asset->supplier_id = $request->supplier_id;
        $asset->purchase_price = $request->purchase_price;
        $asset->purchase_date = $request->purchase_date;
        $asset->serial_number = $request->serial_number;
        $asset->barcode = $request->barcode;
        $asset->description = $request->description;

        // Save the asset
        if ($asset->save()) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Asset created successfully');
        } else {
            // Redirect with error message or handle the error in another way
            return redirect()->back()->with('error', 'Failed to create Asset');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asset $asset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        //
    }
}
