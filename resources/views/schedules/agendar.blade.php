@extends('layouts.main')
@section('title', 'Agendamentos')
@section('content')

    <h2 class="" id="">Agendar</h2>

        
    <form action="/agendar" method="post">
        @csrf
        <div class="row" id="">

            <div class="form-group col-lg-3">
                <label for="tutor">Tutor</label>
                <select name="tutor" id="" class="form-control">
                    <option value="">Selecione o tutor</option>
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->name}} {{$client->lastname}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-2">
                <label for="pet">Nome do pet</label>
                <select name="pet" id="" class="form-control">
                    <option value="">Selecione o pet</option>
                    @foreach($pets as $pet)
                        <option value="{{$pet->id}}">{{$pet->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-lg-2">
                <label for="service">Serviço</label>
                <select name="service" id="" class="form-control">
                    <option value="">Selecione</option>
                        <option value="banho">Banho</option>
                        <option value="tosa">Tosa</option>
                        <option value="consulta">Consulta vet.</option>
                </select>
            </div>

            <div class="form-group col-lg-2">
                <label for="species">Buscar em casa?</label>
                <select name="pick_up" id="" class="form-control">
                    <option value="">Selecione</option>
                    <option value="Sim">Sim</option>
                    <option value="Não">Não</option>
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="breed">Quando?</label>
                <input type="datetime-local" class="form-control" id="dateTime" name="dateTime" placeholder="Insira a raça/SRD">
            </div>
        </div>

        <div class="row justify-content-center" id="">
            <div class="form-group col-lg-6 mt-5 text-center">
                <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Agendar" name="" id="">
            </div>
        </div>

    </form>
@endsection