<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\AssetRequest;
use Illuminate\Http\Request;

class AssetRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            $assetRequests = AssetRequest::latest()->get();
        } else {
            $assetRequests = AssetRequest::where('user_id', $user->id)->latest()->get();
        }

        return view('dashboard.asset-approval', compact('assetRequests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.asset-request');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'asset_name' => 'required',
            'description' => 'required',
            'justification' => 'required',
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        $assetRequest = new AssetRequest();
        $assetRequest->user_id = $user->id;
        $assetRequest->asset_name = $request->asset_name;
        $assetRequest->description = $request->description;
        $assetRequest->justification = $request->justification;
        $assetRequest->request_date = Carbon::now();

        // Check if the request was saved successfully
        if ($assetRequest->save()) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Request sent successfully');
        } else {
            // Redirect with error message or handle the error in another way
            return redirect()->back()->with('error', 'Failed to send request');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssetRequest  $assetRequest
     * @return \Illuminate\Http\Response
     */
    public function show(AssetRequest $assetRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssetRequest  $assetRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(AssetRequest $assetRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssetRequest  $assetRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssetRequest $assetRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssetRequest  $assetRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssetRequest $assetRequest)
    {
        //
    }
}
