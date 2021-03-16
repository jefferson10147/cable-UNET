<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneService;

class PhoneServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phoneServices = PhoneService::all();
        dd($phoneServices);
        
        return view('phone_services_list', compact('phoneServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_phone_service');
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
            'plan_limit' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);
        PhoneService::create($request->all());
        
        return redirect('phone_services/create')->with('success', 'The phone service have been correctly registered');
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
        $phoneService = PhoneService::find($id);
        return view('update_phone_service', compact('phoneService'));
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
            'plan_limit' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);

        $phoneService = PhoneService::find($id);
        $phoneService->name = $request->get('name');
        $phoneService->plan_limit = $request->get('plan_limit');
        $phoneService->price = $request->get('price');
        $phoneService->save();

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
        PhoneService::destroy($id);
        return redirect('admin_home/');
    }
}
