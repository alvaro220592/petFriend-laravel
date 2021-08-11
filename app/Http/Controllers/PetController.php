<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PetRequest;
use App\Models\Client;
use App\Models\Pet;

class PetController extends Controller
{
    public function index() {
        
        $pets = Pet::select(
            'pets.id',
            'pets.pet_name',
            'pets.species',
            'pets.breed',
            'pets.sex',
            'pets.observations',
            'clients.client_name',
            'clients.client_lastname'
        )
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

    public function store(PetRequest $request){
        
        $pet = new Pet;

        $pet->pet_name = $request->pet_name;
        $pet->species = $request->species;
        $pet->breed = $request->breed;
        $pet->sex = $request->sex;
        $pet->observations = $request->observations;
        $pet->client_id = $request->tutor;

        $pet->save();

        return redirect('/pets');

    }

    public function destroy($id){

        $pet = Pet::findOrFail($id)->delete();

        return redirect('/pets');

    }

    public function edit($id){
        $pet = Pet::where('pets.id', $id)
        ->join('clients', 'pets.client_id', 'clients.id')
        ->select(
            'pets.id',
            'pets.pet_name',
            'pets.species',
            'pets.breed',
            'pets.sex',
            'pets.observations',
            'pets.client_id',
            'clients.client_name',
            'clients.client_lastname',
        )->get()->first();

        $clients = Client::all();

        return view('pets.edit', [
            'pet' => $pet,
            'clients' => $clients,
        ]);
    }

    public function update(PetRequest $request){
        $data = $request->all();
        Pet::findOrFail($request->id)->update($data);

        return redirect('/pets')->with('msg', 'Alterado com sucesso');
    }

}
