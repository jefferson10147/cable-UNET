<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CableService;
use App\Models\InternetService;
use App\Models\PhoneService;
use App\Models\Service;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();

        if ($user->role == 1){
            return redirect('admin_home');
        }else{
            return redirect('home');
        }
        
    }

    public function adminHome()
    {
        $cableServices = CableService::all();
        $internetServices = InternetService::all();
        $phoneServices = PhoneService::all();
        $services = Service::all();

        return view('admin_page', compact(
            'cableServices',
            'internetServices',
            'phoneServices',
            'services'
        ));
    }
}
