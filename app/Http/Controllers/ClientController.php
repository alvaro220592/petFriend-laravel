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

    	$dataForm = [
    		$state->initials => $request->initials,
			$city->city => $request->city,
			$street->street => $request->city,
			$client->name => $request->name,
			$client->lastname => $request->lastname,
			$client->address_num => $request->address_num,
			$email->email => $request->email,
			$phone->phone => $request->phone,
		];

    	$state->create($dataForm);		
		$city->state()->create($dataForm);
		$street->city()->create($dataForm);
		$client->street()->create($dataForm);
		$client->create($dataForm);
		$email->client()->create($dataForm);
		$phone->client()->create($dataForm);

		return redirect('/');

    }
}
