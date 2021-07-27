@extends('layouts.main')
@section('title', 'Editar - ' . $client->client_name)
@section('content')

	<h2 class="" id="">Editar dados de {{ $client->client_name }}</h2>

    <form action="/clients" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-3">
                <label for="client_name">Nome</label>
                <input type="text" class="form-control" id="client_name" name="client_name" placeholder="Insira o nome" value="{{ $client->client_name }}">
            </div>
            <div class="form-group col-lg-3">
                <label for="client_lastname">Sobrenome</label>
                <input type="text" class="form-control" id="client_lastname" name="client_lastname" placeholder="Insira o sobrenome" value="{{ $client->client_lastname }}">
            </div>

            <div class="form-group col-lg-2">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira o tel" value="{{ $client->phone }}">
            </div>
            <div class="form-group col-lg-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Insira o email" value="{{ $client->email }}">
            </div>
        </div>


        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Insira o CEP" value="{{ $client->zipcode }}">
            </div>

            <div class="form-group col-lg-4">
                <label for="street">Logradouro</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Insira o logradouro" value="{{ $client->street }}">
            </div>

            <div class="form-group col-lg-1">
                <label for="address_num">Número</label>
                <input type="text" class="form-control" id="address_num" name="address_num" placeholder="Nº" value="{{ $client->address_num }}">
            </div>


            <div class="form-group col-lg-4">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Insira a cidade" value="{{ $client->city }}">
            </div>
            <div class="form-group col-lg-1">
                <label for="initials">UF</label>
                <input type="text" class="form-control" id="initials" name="initials" placeholder="UF" value="{{ $client->initials }}">
            </div>

            <div class="row justify-content-center" id="">
                <div class="form-group col-lg-6 mt-5 text-center">
                    <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Atualizar" name="" id="">
                </div>
            </div>
        </div>
    </form>

@endsection