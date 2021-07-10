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
    @if(count($schedules) > 0)
        {{--@foreach($schedules as $schedule)
            <div class="agendamento">
                <p><span class="schedule-title">Pet:</span> {{$schedule->pet_name}}</p>
                <p><span class="schedule-title">Serviço:</span> {{$schedule->service}}</p>
                <p><span class="schedule-title">Raça:</span> {{$schedule->breed}}</p>
                <p><span class="schedule-title">Gênero:</span> {{$schedule->gender}}</p>
                <p><span class="schedule-title">Observações:</span> {{$schedule->observations}}</p>
                <p><span class="schedule-title">Tutor:</span> {{$schedule->client_name}}</p>
                <p><span class="schedule-title">Telefone:</span> {{$schedule->phone}}</p>
                <p><span class="schedule-title">Email:</span> {{$schedule->email}}</p>
                <p><span class="schedule-title">Endereço:</span> {{$schedule->street}}, {{$schedule->address_num}}</p>
                <p><span class="schedule-title">Buscar em domicílio:</span> {{$schedule->pick_up}}</p>
                <p><span class="schedule-title">Data:</span> {{date('d/m/Y - H:i', strtotime($schedule->dateTime))}}</p>
                <hr>
            </div>
        @endforeach--}}

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
                
                <hr>
        @endforeach
                
                               
                
            </div>

    @else
        <h3>Não há agendamentos</h3>
    @endif
    
</div>
       
@endsection