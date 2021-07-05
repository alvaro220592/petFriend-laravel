@extends('layouts.main')
@section('title', 'Cadastro de clientes')
@section('content')

	<h2 class="" id="">Cadastrar cliente</h2>

    <form action="/clients" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome">
            </div>
            <div class="form-group col-lg-3">
                <label for="lastname">Sobrenome</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Insira o sobrenome">
            </div>

            <div class="form-group col-lg-2">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira o tel">
            </div>
            <div class="form-group col-lg-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Insira o email">
            </div>
        </div>


        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Insira o CEP">
            </div>

            <div class="form-group col-lg-4">
                <label for="street">Logradouro</label>
                <input type="text" class="form-control" id="street" name="street" placeholder="Insira o logradouro">
            </div>

            <div class="form-group col-lg-1">
                <label for="address_num">Número</label>
                <input type="text" class="form-control" id="address_num" name="address_num" placeholder="Nº">
            </div>


            <div class="form-group col-lg-4">
                <label for="city">Cidade</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Insira a cidade">
            </div>
            <div class="form-group col-lg-1">
                <label for="initials">UF</label>
                <input type="text" class="form-control" id="initials" name="initials" placeholder="UF">
            </div>

            <div class="row justify-content-center" id="">
                <div class="form-group col-lg-6 mt-5 text-center">
                    <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Cadastrar" name="" id="">
                </div>
            </div>
        </div>
    </form>

@endsection