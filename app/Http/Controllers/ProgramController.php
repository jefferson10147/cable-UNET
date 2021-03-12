<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function saveProgram(Request $request)
    {
        $program = Program::create([
            'channel_id' => 1,
            'date' => '2021-03-15',
            'program_name' => 'Real Madrid vs Atalanta',
            'starts_at' => '03:00',
            'ends_at' => '04:55'
        ]);

        return view('welcome');
    }
}
