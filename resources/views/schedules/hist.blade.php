@extends('layouts.main')

@section('title', 'Histórico')

@section('content')

<h2 class="" id="">Histórico de agendamentos ({{ count($schedules) }})</h2>

<div class="row mb-1 row justify-content-between">

</div>

<div class="px-3" id="schedule-container" >
    
    @if(count($schedules) == 0 && $search)
        <div class="msg">
            <h3>Sem resultados ao buscar por "{{$search}}".
                <a href="/" class="link-msg">Ver todos</a>
            </h3>
        </div>

    @elseif(count($schedules) == 0)
        <div class="msg">
            <h3>Não há agendamentos</h3>
        </div>

    @elseif($search)

        <div class="msg">
            <h3>Mostrando resultados ao buscar por "{{$search}}".
                <a href="/" class="link-msg">Ver todos</a>
            </h3>
        </div>
    @endif

        @foreach($schedules as $schedule)
            <div class="agendamento">
                <p><ion-icon name="paw" class="icon"></ion-icon>
                    <span class="schedule-title">Pet:</span> {{$schedule->pet_name}}</p>

                <p><ion-icon name="newspaper" class="icon"></ion-icon>
                    <span class="schedule-title">Serviço:</span> {{$schedule->service}}</p>

                <p><ion-icon name="information-circle" class="icon"></ion-icon>
                    <span class="schedule-title">Raça:</span> {{$schedule->breed}}</p>
                
                <p><ion-icon name="male-female" class="icon"></ion-icon>
                    <span class="schedule-title">Sexo:</span> {{$schedule->sex}}</p>

                <p><ion-icon name="reorder-four" class="icon"></ion-icon>
                    <span class="schedule-title">Observações:</span> {{$schedule->observations}}</p>
        
                <p><ion-icon name="person-circle" class="icon"></ion-icon>
                    <span class="schedule-title">Tutor:</span> {{$schedule->client_name}} {{$schedule->client_lastname}}</p>

                <p><ion-icon name="location" class="icon"></ion-icon>
                    <span class="schedule-title">Endereço:</span> 
                    Rua/Avenida {{$schedule->street}}, 
                    nº {{$schedule->address_num}},
                    CEP: {{$schedule->zipcode}},
                    {{$schedule->city}} - {{$schedule->initials}}
                </p>

                <p><ion-icon name="car" class="icon"></ion-icon>
                    <span class="schedule-title">Buscar em domicílio:</span> {{$schedule->pick_up}}</p>

                <p><ion-icon name="today" class="icon"></ion-icon>
                    <span class="schedule-title">Data:</span>
                        {{date('d/m/Y', strtotime($schedule->dateTime))}}
                </p>

                <p><ion-icon name="time" class="icon"></ion-icon>
                    <span class="schedule-title">Hora:</span>
                     {{date('H:i', strtotime($schedule->dateTime))}}
                </p>

                <p><ion-icon name="mail" class="icon"></ion-icon>
                    <span class="schedule-title">Email:</span> 
                        {{$schedule->email}}
                </p>
                
                <p><ion-icon name="call" class="icon"></ion-icon>
                    <span class="schedule-title">Telefone:</span>
                        {{$schedule->phone}}
                </p>

                <p><ion-icon name="person-circle" class="icon"></ion-icon>
                    <span class="schedule-title">Usuário cad.:</span>
                        {{$schedule->user_id}}
                </p>
                
                <p><ion-icon name="document-text" class="icon"></ion-icon>
                    <span class="schedule-title">Status:</span>
                        {{$schedule->status}}
                </p>

                <hr>

        @endforeach

@endsection