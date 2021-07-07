@extends('layouts.main')
@section('title', 'Cadastro de Pets')
@section('content')

	<h2 class="" id="">Cadastrar pet</h2>

    <form action="/clients" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="name">Nome</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Insira o nome">
            </div>
            <div class="form-group col-lg-2">
                <label for="lastname">Espécie</label>
                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Insira a espécie">
            </div>

            <div class="form-group col-lg-3">
                <label for="phone">Raça/SRD</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Insira a raça/SRD">
            </div>
            <div class="form-group col-lg-2">
                <label for="phone">Gênero</label>
                <select name="gender" id="" class="form-control">
                    <option value="">Selecione</option>
                    
                    <option value="">Macho</option>
                    <option value="">Fêmea</option>
                    
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="street">Tutor</label>
                <select name="tutor" id="" class="form-control">
                    <option value="">Selecione o tutor</option>
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}} {{$client->lastname}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="row" id="">
            

            
            <div class="form-group col-lg-12">
                <label for="">Obsevações</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Insira as observações(Alérgico a perfume, a um remédio específico, etc.)</label>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" id="">
            <div class="form-group col-lg-6 mt-5 text-center">
                <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Cadastrar" name="" id="">
            </div>
        </div>

    </form>

@endsection