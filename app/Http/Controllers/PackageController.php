<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\CableService;
use App\Models\Channel;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = Package::all();
        dd($packages);
        return view('packages_list', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cableServices = CableService::all();
        $channels = Channel::all();

        return view('create_package', compact('cableServices', 'channels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $cableServiceId = $request->get('cable_service_id');
        //dd($request->post('channels_ids'), 'hola');
        $channelsIds = $request->get('channels_ids');

        $oldPackages = Package::where('cable_service_id', $cableServiceId)->get();
        //dd($oldPackages);
        if($oldPackages){
            foreach($oldPackages as $oldPackage){
                Package::destroy($oldPackage->id);
            }
        }

        if (!$cableServiceId || !$channelsIds){
            return redirect('packages/create')->with('danger', 'You must choose at least one channel and at least one cable Service');
        }

        foreach ($channelsIds as $channelId){
            Package::create([
                'cable_service_id' => $cableServiceId,
                'channel_id' => $channelId
            ]);
        }

        return redirect('packages/create')->with('success', 'Channels have been added to package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
