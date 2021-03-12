<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function savePackage(Request $request)
    {
        $package = Package::create([
            'cable_service_id' => 1,
            'channel_id' => 1
        ]);

        return view('welcome');
    }
}
