@extends('layouts.main')
@section('title', 'Cadastro de clientes')
@section('content')

	<h2 class="" id="">Cadastrar cliente</h2>

    
    <div class="row" id="">
        <div class="form-group col-lg-3">
            <label for="title">Nome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>
        <div class="form-group col-lg-3">
            <label for="title">Sobrenome</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>

        <div class="form-group col-lg-2">
            <label for="title">Telefone</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>
        <div class="form-group col-lg-4">
            <label for="title">Email</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>
    </div>


    <div class="row" id="">
        <div class="form-group col-lg-2">
            <label for="title">CEP</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>

		<div class="form-group col-lg-4">
            <label for="title">Endereço</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>

        <div class="form-group col-lg-1">
            <label for="title">Nº</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>


        <div class="form-group col-lg-4">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>
        <div class="form-group col-lg-1">
            <label for="title">UF</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Insira o título">
        </div>

        <div class="row justify-content-center" id="">
        	<div class="form-group col-lg-6 mt-4 text-center">
        		<input type="submit" class="btn w-50" value="Cadastrar" name="" id="btn-cadastro">
        	</div>
        </div>
    </div>

@endsection