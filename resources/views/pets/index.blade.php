@extends('layouts.main')
@section('title', 'Pets')
@section('content')

    <h2 class="" id="">Pets Cadastrados ({{ count($pets) }})</h2>

    <a href="{{ url('/pets/cadastro') }}">
        <h3 class="text-dark">
        <ion-icon name="add-circle" class="add-icon"></ion-icon>
        Novo pet</h3>
    </a>

    <div id="table-container">
    <div class="table-responsive">
        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Raça</th>
                    <th>Sexo</th>
                    <th>Tutor</th>
                    <th>Observações</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pets as $pet)
                    <tr>
                        <td>{{ $pet->id }}</td>
                        <td>{{ $pet->pet_name }}</td>
                        <td>{{ $pet->species }}</td>
                        <td>{{ $pet->breed }}</td>
                        <td>{{ $pet->sex }}</td>
                        <td>{{ $pet->client_name }} {{ $pet->client_lastname }}</td>
                        <td>{{ $pet->observations }}</td>
                        <td>
                            <ion-icon name="refresh-circle" class="action-icon text-warning"></ion-icon>
                            <ion-icon name="close-circle" class="action-icon text-danger"></ion-icon>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    
@endsection