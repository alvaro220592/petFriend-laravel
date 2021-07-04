@extends('layouts.main')
@section('title', 'Cadastro de clientes')
@section('content')

	<h2 class="" id="">Cadastrar cliente</h2>

    
    <div class="row" id="">
        <div class="form-group col-lg-3">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o nome">
        </div>
        <div class="form-group col-lg-3">
            <label for="title">Sobrenome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o sobrenome">
        </div>

        <div class="form-group col-lg-2">
            <label for="title">Telefone</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o tel">
        </div>
        <div class="form-group col-lg-4">
            <label for="title">Email</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o email">
        </div>
    </div>


    <div class="row" id="">
        <div class="form-group col-lg-2">
            <label for="title">CEP</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o CEP">
        </div>

		<div class="form-group col-lg-4">
            <label for="title">Endereço</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o endereço">
        </div>

        <div class="form-group col-lg-1">
            <label for="title">Número</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nº">
        </div>


        <div class="form-group col-lg-4">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira a cidade">
        </div>
        <div class="form-group col-lg-1">
            <label for="title">UF</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="UF">
        </div>

        <div class="row justify-content-center" id="">
        	<div class="form-group col-lg-6 mt-5 text-center">
        		<input type="submit" class="btn btn-outline-light btn-geral w-50" value="Cadastrar" name="" id="">
        	</div>
        </div>
    </div>

@endsection