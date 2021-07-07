<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Pet;
use App\Models\Client;

class ScheduleController extends Controller
{
    
    public function agendar(){

        $pets = Pet::all();
        $clients = Client::all();

        return view('schedules.agendar', [
            'pets' => $pets,
            'clients' => $clients
        ]);
    }

    public function store(Request $request){
        $schedule = new Schedule;
        // $user = new User;
        // $client = new Client;
        // $pet = new Pet;

        $schedule->services = $request->services;
        $schedule->pick_up = $request->pick_up;
        $schedule->dateTime = $request->dateTime;

        $schedule->save();
    }
}
