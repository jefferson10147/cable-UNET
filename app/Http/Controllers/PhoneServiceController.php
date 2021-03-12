<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhoneService;

class PhoneServiceController extends Controller
{
    public function savePhoneService(Request $request)
    {
        /*
        $phoneService = PhoneService::create([
            'name' => 'simple',
            'plan_limit' => '30 min',
            'price' => 3.99 
        ]);
        */
        return view('welcome');
    }
}
