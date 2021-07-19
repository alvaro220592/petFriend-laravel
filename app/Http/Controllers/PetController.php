<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Pet;

class PetController extends Controller
{
    public function index() {
        
        $pets = Pet::OrderBy('pet_name')
        ->join('clients', 'pets.client_id', '=', 'clients.id')
        ->get();

        return view('pets.index',[
            'pets' => $pets,
        ]);
    }

    public function cadastro(){
        $clients = Client::all();

        return view('pets.cadastro', [
            'clients' => $clients
        ]);
    }

    public function store(Request $request){
        
        $pet = new Pet;

        $pet->pet_name = $request->pet_name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->sex = $request->sex;
        $pet->observations = $request->observations;
        $pet->client_id = $request->tutor;

        $pet->save();

        return redirect('/');

    }

}
