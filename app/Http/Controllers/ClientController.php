<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Street;
use App\Models\Client;
use App\Models\Phone;
use App\Models\Email;

class ClientController extends Controller
{
    public function index(){

    	return view('clients.cadastro');

    }

    public function store(Request $request){

		$state = new State;
		$city = new City;
		$street = new Street;
		$client = new Client;
		$email = new Email;
		$phone = new Phone;

		// Cadastro de estados
		$state->firstOrCreate([
			'initials' => $request->initials
		]);
		
		// buscando o id do estado referente ao digitado no campo:
		$state_id = State::where('initials', $request->initials)->pluck('id')->first();

		// Cadastro de cidades
		$city->firstOrCreate([
			'city' => $request->city,
			'state_id' => $state_id
		]);

		// buscando o id da cidade referente ao digitado no campo:
		$city_id = City::where('city', $request->city)->pluck('id')->first();

		$street->firstOrCreate([
			'street' => $request->street,
			'zipcode' => $request->zipcode,
			'city_id' => $city_id
		]);

		return redirect('/');

    }
}
