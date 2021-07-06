@extends('layouts.main')
@section('title', 'Cadastro de Pets')
@section('content')

	<h2 class="" id="">Cadastrar pet</h2>

    <form action="/clients" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-3">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome">
            </div>
            <div class="form-group col-lg-3">
                <label for="lastname">Espécie</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Insira o sobrenome">
            </div>

            <div class="form-group col-lg-2">
                <label for="phone">Raça</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira o tel">
            </div>
            <div class="form-group col-lg-2">
                <label for="phone">Gênero</label>
                <select name="gender" id="" class="form-control">
                    <option value="">Selecione</option>
                    
                    <option value="">Macho</option>
                    <option value="">Fêmea</option>
                    
                </select>
            </div>
        </div>


        <div class="row" id="">
            

            <div class="form-group col-lg-4">
                <label for="street">Tutor</label>
                <select name="tutor" id="" class="form-control">
                    <option value="">Selecione o tutor</option>
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}} {{$client->lastname}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Obsevações</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Insira as observações</label>
                </div>
            </div>
        </div>
    </form>

@endsection