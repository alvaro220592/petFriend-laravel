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

		$clients = Client::orderBy('client_name')
		->join('streets', 'clients.street_id', '=', 'streets.id')
		->join('cities', 'streets.city_id', '=', 'cities.id')
		->join('states', 'cities.state_id', '=', 'states.id')
		->join('phones', 'clients.id', '=', 'phones.client_id')
		->join('emails', 'clients.id', '=', 'emails.client_id')
		->get();

		return view('clients.index',[
			'clients' => $clients,
		]);

	}

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
			'client_name' => $request->client_name,
			'client_lastname' => $request->client_lastname,
			'address_num' =>$request->address_num,
			'street_id' => $street_id
		]);

		// pegando id do cliente com o nome e sobrenome descritos nos campos pra associar o email
		$client_id = Client::where('client_name', $request->client_name)
			->where('client_lastname', $request->client_lastname)
			->pluck('id')->first();

		$email->firstOrCreate([
			'email' => $request->email,
			'client_id' => $client_id
		]);

		$phone->firstOrCreate([
			'phone' => $request->phone,
			'client_id' => $client_id
		]);

		return redirect('/clients');
	}

	public function destroy($id){

		$client = Client::findOrFail($id)->delete();

		return redirect('/clients')->with('msg', 'Excluído com sucesso');

	}

	public function edit($id){
		$client = Client::where('clients.id', $id)
		->join('phones', 'clients.id', '=', 'phones.client_id')
		->join('emails', 'clients.id', '=', 'emails.client_id')
		->join('streets', 'clients.street_id', 'streets.id')
		->join('cities', 'cities.id', 'streets.city_id')
		->join('states', 'states.id', 'cities.state_id')
		->select(
			'clients.id',
			'clients.client_name',
			'clients.client_lastname',
			'clients.address_num',
			'phones.phone',
			'emails.email',
			'streets.zipcode',
			'streets.street',
			'cities.city',
			'states.initials'
		)
		->get()->first();

		return view('clients.edit', [
			'client' => $client,
			//'phone' => $phone,
		]);
	}

	public function update(Request $request){
		$data = $request->all();
		Client::findOrFail($request->id)->update($data);

		return redirect('/clients')->with('msg', 'Alterado com sucesso');
	}
}
