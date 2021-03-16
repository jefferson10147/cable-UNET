<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CableService;
use App\Models\Channel;

class CableServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cableService = CableService::all();
        dd($cableService);

        return view('cable_services_list', compact('cableService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_cable_service');
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
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);
        CableService::create($request->all());

        return redirect('cable_services/create')->with('success', 'The cable service have been correctly registered');
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
        $cableService = CableService::find($id);
        return view('update_cable_service', compact('cableService'));
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
        $request->validate([
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);

        $cableService = CableService::find($id);
        $cableService->name = $request->get('name');
        $cableService->price = $request->get('price');
        $cableService->save();

        return redirect('admin_home/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CableService::destroy($id);
        return redirect('admin_home/');
    }

    public function addChannels($id)
    {
        $cableServices = array(CableService::find($id));
        $channels = Channel::all();
        return view('create_package', compact('cableServices', 'channels'));
    }
}
