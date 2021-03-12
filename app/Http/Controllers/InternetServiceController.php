<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InternetService;

class InternetServiceController extends Controller
{
    public function saveInternetService(Request $request)
    {
        /*
        $internetService = InternetService::create([
            'name' => 'very fast',
            'speed' => '50 mb/s',
            'price' => 29.9 
        ]);
        */
        return view('welcome');
    }
}
