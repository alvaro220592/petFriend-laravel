@extends('layouts.main')
@section('title', 'Clientes')
@section('content')

    <h2 class="" id="">Clientes Cadastrados ({{ count($clients) }})</h2>

    <a href="{{ route('/clients/cadastro') }}">
        <h3 class="text-dark">
        <ion-icon name="add-circle" class="add-icon"></ion-icon>
        Novo cliente</h3>
    </a>

    <div id="table-container">
    <div class="table-responsive">
        <table class="table text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>UF</th>
                    <th>CEP</th>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->id }}</td>
                        <td>
                            {{ $client->client_name }}
                            {{ $client->client_lastname }}
                        </td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->street }}, 
                            {{ $client->address_num }}
                        </td>
                        <td>{{ $client->city }}</td>
                        <td>{{ $client->initials }}</td>
                        <td>{{ $client->zipcode }}</td>
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