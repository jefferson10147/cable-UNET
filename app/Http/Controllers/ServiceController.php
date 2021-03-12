<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function saveService(Request $request)
    {
        /*
        $service = Service::create([
            'internet_service_id' => 2,
            'phone_service_id' => 1,
            'price' => 39.99
        ]);
        */
        return view('welcome');
    }
}
