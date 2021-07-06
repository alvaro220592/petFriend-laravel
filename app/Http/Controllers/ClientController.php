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

		// $state->initials = $request->initials;
		// $state->save();
		$state->firstOrCreate(['initials' => $request->initials]);
		$estado = State::where('initials', $request->initials)->pluck('id')->first();

		// $city->city = $request->city;
		// $city->state_id = $state->id;
		$city->firstOrCreate(['city' => $request->city,
			'state_id' => $estado
		]);

    	// $dataForm = [
		// 	'initials' => $request->initials,
    	// 	'city' => $request->city,
		// 	'state_id' => $state->id,
		// 	$street->street => $request->street,
		// 	$street->zipcode => $request->zipcode,
		// 	$street->city_id => $city->id,
		// 	$client->name => $request->name,
		// 	$client->lastname => $request->lastname,
		// 	$client->street_id => $street->id,
		// 	$email->email => $request->email,
		// 	$email->client_id => $client->id,
		// 	$phone->phone => $request->phone,
		// 	$phone->client_id => $client->id,
		// ];

		
		
    	// $state->save();
		// $city->save();
		// $city->state()->create($dataForm);
		// $street->city()->create($dataForm);
		// $client->street()->create($dataForm);
		// $client->create($dataForm);
		// $email->client()->create($dataForm);
		// $phone->client()->create($dataForm);

		return redirect('/');

    }
}
