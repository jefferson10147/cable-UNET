<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    public function saveChannel(Request $request)
    {
        $channel = Channel::create([
            'name' => 'FOX Sports',
            'description' => 'Your favorite sports channel',
            'price' => 1.99
        ]);

        return view('welcome');
    }
}
