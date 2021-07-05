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
		$city = new city;
		$street = new street;

    	$dataForm = [
    		$state->initials => $request->state,
			$city->city => $request->city,
			$street->street => $request->city
		];

    	$state->create($dataForm);		
		$city = $city->state()->create($dataForm);
		$street = $street->city()->create($dataForm);

    }
}
