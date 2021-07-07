@extends('layouts.main')
@section('title', 'PetFriend - Início')
@section('content')

<h2 class="" id="">Agendamentos</h2>

<div class="px-3" id="schedule-container">
    
    {{--<div class="agendamento">
        <p>Pet: Flip</p>
        <p>Serviços: Banho, Tosa</p>
        <p>Raça: SRD</p>
        <p>Gênero: Macho</p>
        <p>Observações: alérgico a perfume. Lavar apenas com shampoo</p>
        <p>Tutor: Álvaro</p>
        <p>Telefone: 11953207491</p>
        <p>Endereço: Rua Assis Valente 309</p>
        <p>Buscar em domicílio: Não</p>
        <p>Data: 22/06/2021 às 15:30</p>
        <hr>
    </div>--}}
    @foreach($schedules as $schedule)
        <div class="agendamento">
            <p>Pet: {{$schedule->pet_name}}</p>
            <p>Serviços: {{$schedule->service}}</p>
            <p>Raça: {{$schedule->breed}}</p>
            <p>Gênero: {{$schedule->gender}}</p>
            <p>Observações: {{$schedule->observations}}</p>
            <p>Tutor: {{$schedule->client_name}}</p>
            {{--<p>Telefone: {{$schedule->}}</p>
            <p>Endereço: {{$schedule->}}</p>--}}
            <p>Buscar em domicílio: {{$schedule->pick_up}}</p>
            <p>Data: {{date('d/m/Y - H:i', strtotime($schedule->dateTime))}}</p>
            <hr>
        </div>
    @endforeach
    
</div>
       
@endsection