@extends('layouts.main')
@section('title', 'Cadastro de Pets')
@section('content')

	<h2 class="" id="">Cadastrar pet</h2>

    @if ($errors->any())
        @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#modal').modal('show');
                })
            </script>
        @endsection
    @endif

    <form action="/pets" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="pet_name">Nome</label>
                <input type="text" class="form-control @error ('pet_name') is-invalid @enderror" id="pet_name" name="pet_name" placeholder="Insira o nome">
            </div>
            <div class="form-group col-lg-2">
                <label for="species">Espécie</label>
                <input type="text" class="form-control" id="species" name="species" placeholder="Insira a espécie">
            </div>

            <div class="form-group col-lg-3">
                <label for="breed">Raça/SRD</label>
                <input type="text" class="form-control" id="breed" name="breed" placeholder="Insira a raça/SRD">
            </div>

            <div class="form-group col-lg-2">
                <label for="sex">Sexo</label>
                <select name="sex" id="" class="form-control">
                    <option value="">Selecione</option>                    
                    <option value="macho">Macho</option>
                    <option value="femea">Fêmea</option>
                    
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="tutor">Tutor</label>
                <select name="tutor" id="" class="form-select">
                    <option value="">Selecione o tutor</option>
                    @foreach($clients as $client)
                        <option value="{{$client->id}}">{{$client->client_name}} {{$client->client_lastname}}</option>
                    @endforeach
                </select>
            </div>
        </div>


        <div class="row" id="">           
            <div class="form-group col-lg-12">
                <label for="observations">Obsevações</label>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="observations" style="height: 100px" name="observations"></textarea>
                </div>
            </div>
        </div>

        <div class="row justify-content-center" id="">
            <div class="form-group col-lg-6 mt-5 text-center">
                <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Cadastrar" name="" id="">
            </div>
        </div>

    </form>

    <div class="modal fade" tabindex="-1" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Atenção</h5>
              &nbsp;
              <ion-icon name="warning" class="text-light fs-3 align-middle"></ion-icon> 
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-modal" data-bs-dismiss="modal">Ok</button>
            </div>
          </div>
        </div>
      </div>
@endsection