@extends('layouts.main')
@section('title', 'Início')
@section('content')

<h2 class="" id="">Agendamentos ({{ count($schedules) }})</h2>

<div class="row mb-1 row justify-content-between">
    <div class="col-lg-3">
        <a href="{{ route('agendarView') }}">
            <h3 class="novo-cadastro text-dark">
                <ion-icon name="add-circle" class="add-icon"></ion-icon>
                Novo agendamento
            </h3>
        </a>
    </div>
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

                <button class="btn my-2 btn-finalizar" id="btn-finalizar{{ $schedule->id }}">
                        Finalizar
                </button>
                
                {{-- SELECT DINAMICO - finalizar --}}
                <div class="row finalizar" id="finalizar{{ $schedule->id }}">
                    <div class="col-lg-2">
                        <span class="schedule-title">Tratativa</span>
                        <form action="/schedule/finalizar/{{ $schedule->id }}" method="post" class="form-finalizar">
                            @csrf
                            @method('PUT')
                            <select class="form-select" name="status">
                                <option selected>Selecione</option>
                                <option value="finalizado">Finalizado</option>
                                <option value="cancelado">Cancelado</option>
                            </select>
                    </div>
                    <div class="col-lg-5">
                        <span class="schedule-title">Observações?</span>
                        <input type="text" name="obs" class="form-control obs" placeholder="Insira se houver">
                    </div>

                    <div class="col-lg-3">
                        <span class="schedule-title">Confirmar?</span><br>
                            <button class="btn rounded btn-confirmar" type="submit">
                                Sim
                            </button>
                        </form>
                        <button class="btn rounded btn-confirmar-nao" id="">Não</button>
                    </div>

                </div>

                @section('scripts')
                    <script>
                        var id = {!! json_encode($schedule->id) !!};

                        $(document).ready(function() {

                        $('.finalizar').hide();
                        $('.btn-finalizar').click(function () {
                            $(this).next('.finalizar').toggle(500);
                        })

                        $('.btn-confirmar-nao').click(function () {
                            $('.finalizar').hide(500);
                        })
                    })
                    </script>
                @endsection

                <hr>
        @endforeach
                
            </div>
    </div>
       
@endsection