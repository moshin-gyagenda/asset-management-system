<?php

namespace App\Http\Controllers;

use App\Models\AssignedAsset;
use Illuminate\Http\Request;

class AssignedAssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.assigned-assets');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssignedAsset  $assignedAsset
     * @return \Illuminate\Http\Response
     */
    public function show(AssignedAsset $assignedAsset)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssignedAsset  $assignedAsset
     * @return \Illuminate\Http\Response
     */
    public function edit(AssignedAsset $assignedAsset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssignedAsset  $assignedAsset
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignedAsset $assignedAsset)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssignedAsset  $assignedAsset
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssignedAsset $assignedAsset)
    {
        //
    }
}
