<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternetService;

class InternetServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $internetServices = InternetService::all();
        // dd($internetServices);
        return view('internet_services_list', compact('internetServices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_internet_service');
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
            'speed' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);
        InternetService::create($request->all());

        return redirect('internet_services/create')->with('success', 'The internet service have been correctly registered');
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
        $internetService = InternetService::find($id);
        return view('update_internet_service', compact('internetService'));
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
            'speed' => ['required', 'string'],
            'price' => ['required', 'numeric']
        ]);

        $internetService = InternetService::find($id);
        $internetService->name = $request->get('name');
        $internetService->speed = $request->get('speed');
        $internetService->price = $request->get('price');
        $internetService->save();

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
        InternetService::destroy($id);
        return redirect('admin_home/');
    }
}
