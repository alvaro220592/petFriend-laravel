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
    public function cadastro(){

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

		// cadastrando cliente
		$street_id = Street::where('street', $request->street)->pluck('id')->first();		
		$client->firstOrCreate([
			'name' => $request->name,
			'lastname' => $request->lastname,
			'address_num' =>$request->address_num,
			'street_id' => $street_id
		]);

		// pegando id do cliente com o nome e sobrenome descritos nos campos pra associar o email
		$client_id = Client::where('name', $request->name)
			->where('lastname', $request->lastname)
			->pluck('id')->first();

		$email->firstOrCreate([
			'email' => $request->email,
			'client_id' => $client_id
		]);

		$phone->firstOrCreate([
			'phone' => $request->phone,
			'client_id' => $client_id
		]);

		return redirect('/');

    }
}
