<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CableService;

class CableServiceController extends Controller
{
    public function saveCableService(Request $request)
    {
        /*
        $cableService = CableService::create([
            'name' => 'bronze',
            'price' => 29.99
        ]);
        */
        return view('welcome');
    }
}
