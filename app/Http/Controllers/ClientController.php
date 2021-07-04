<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\State;
use App\Models\City;
use App\Models\Street;

class ClientController extends Controller
{
    public function index(){

    	return view('clients.cadastro');

    }

    public function store(Request $request){


    	$dataForm = [

    		$state->state => $request->state

    	]

    	$st = $street->create($dataForm);

    }
}
