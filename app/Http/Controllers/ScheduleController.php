<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Pet;
use App\Models\Client;
use App\Models\Email;
use App\Models\Phone;
use App\Models\Street;
use App\Models\City;
use App\Models\State;

class ScheduleController extends Controller
{

    public function index() {

        /* EX 1
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
            'emails.email',
            'phones.phone',

        ])->join('clients', function($join){

			$join->on('schedules.client_id', '=', 'clients.id');
		
        })->join('pets', function($join){

            $join->on('schedules.client_id', '=', 'pets.client_id');

        })->join('emails', function($join){

            $join->on('clients.id', '=', 'emails.client_id');

        })->join('phones', function($join){

            $join->on('clients.id', '=', 'phones.client_id');
        
        })->get();
        ======================
        */

                
        //Ex 2
        /*$schedules = Schedule::select()
                ->join('clients', 'schedules.client_id', '=', 'clients.id')
                ->join('emails', 'clients.id', '=', 'emails.client_id')
                ->get();*/

        /*Ex3
        $schedules = Schedule::select()
            ->join('clients', 'schedules.client_id', '=', 'clients.id')
            ->join('phones', 'clients.id', '=' ,'phones.client_id')
            ->join('emails', 'clients.id', '=' ,'emails.client_id')
            ->join('pets', 'schedules.pet_id', '=', 'pets.id')
            ->join('streets', 'clients.street_id', '=' ,'streets.id')
            ->get();
            // '->take(1)' ou  '$schedules = Schedule::limit(número)' só pega um resultado, então se um cliente tem varios emails, pega 1 só pra mostrar, evitando duplicar agendamentos no inner join*/

        /*EX 4 */

        $schedules = Schedule::select()
            ->join('clients', 'schedules.client_id', '=', 'clients.id')        
            ->join('pets', 'pets.id', '=', 'schedules.pet_id')
            ->join('streets', 'clients.street_id', '=', 'streets.id')
            ->join('cities', 'streets.city_id', '=', 'cities.id')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->join('emails', 'clients.id', '=', 'emails.client_id')
            ->join('phones', 'clients.id', '=', 'phones.client_id')
            ->get();

        return view('index', [
			'schedules' => $schedules,
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
