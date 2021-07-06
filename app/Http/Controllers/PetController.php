<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class PetController extends Controller
{
    public function index() {
        return view('index');
    }

    public function agendar(){
        return view('agendar');
    }

    public function cadastro(){
        $clients = Client::all();

        return view('pets.cadastro', [
            'clients' => $clients
        ]);
    }

}
