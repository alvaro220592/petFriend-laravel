<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Pet;

class PetController extends Controller
{
    public function index() {
        //return view('index');
    }

    public function cadastro(){
        $clients = Client::all();

        return view('pets.cadastro', [
            'clients' => $clients
        ]);
    }

    public function store(Request $request){
        
        $pet = new Pet;

        $pet->name = $request->name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->gender = $request->gender;
        $pet->observations = $request->observations;
        $pet->client_id = $request->tutor;

        $pet->save();

        return redirect('/');

    }

}
