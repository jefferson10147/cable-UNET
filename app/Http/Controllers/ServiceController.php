<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\InternetService;
use App\Models\PhoneService;
use App\Models\CableService;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        dd($services);

        return view('services_list', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $internetServices = InternetService::all();
        $phoneServices = PhoneService::all();
        $cableServices = CableService::all();

        return view('create_service', compact('internetServices', 'phoneServices', 'cableServices'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $internetServiceId = $request->post('internet_service_id');
        $phoneServiceId =  $request->post('phone_service_id');
        $cableServiceId = $request->post('cable_service_id');
        $price = 0;

        if (!$internetServiceId && !$phoneServiceId && !$cableServiceId) {
            return redirect('services/create')->with('danger', 'You have to choose at least one service');
        }

        if ($internetServiceId) {
            $price = InternetService::find($internetServiceId)->price;
        }

        if ($phoneServiceId) {
            $price += PhoneService::find($phoneServiceId)->price;
        }

        if ($cableServiceId) {
            $price += CableService::find($cableServiceId)->price;
        }
        
        // dd($price);
        Service::create([
            'internet_service_id' => $internetServiceId,
            'phone_service_id' => $phoneServiceId,
            'cable_service_id' => $cableServiceId,
            'price' => $price
        ]);

        return redirect('services/create')->with('succes', 'Service have been correctly registered');
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
