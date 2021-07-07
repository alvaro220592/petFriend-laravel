<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Pet;
use App\Models\Client;

class ScheduleController extends Controller
{

    public function index() {

        $schedules = Schedule::select([
            'schedules.service',
            'schedules.pick_up',
            'schedules.datetime',
            'schedules.dateTime',
            'clients.client_name',
            'pets.pet_name',
            'pets.breed',
            'pets.gender',
            'pets.observations',

        ])->join('clients', function($join){

			$join->on('clients.id', '=', 'schedules.client_id');
		
        })->join('pets', function($join){

            $join->on('clients.id', '=', 'pets.client_id');

        })->get();

        return view('index',[
			'schedules' => $schedules
        ]);
    }
    
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

        $schedule->service = $request->service;
        $schedule->pick_up = $request->pick_up;
        $schedule->dateTime = $request->dateTime;
        // $schedule->user_id = 1;
        $schedule->client_id = $request->tutor;
        $schedule->pet_id = $request->pet;
        
        $schedule->save();

        return redirect('/');
    }
}
