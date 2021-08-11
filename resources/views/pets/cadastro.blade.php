@extends('layouts.main')
@section('title', 'Cadastro de Pets')
@section('content')

	<h2 class="" id="">Cadastrar pet</h2>

    @if ($errors->any())
        @section('scripts')
            <script type="text/javascript">
                modal()
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
            <div class="form-group col-lg-3">
                <label for="species">Espécie</label>
                <input type="text" class="form-control @error ('species') is-invalid @enderror" id="species" name="species" placeholder="Ex: Cão, gato, ave...">
            </div>

            <div class="form-group col-lg-3">
                <label for="breed">Raça/SRD</label>
                <input type="text" class="form-control @error ('breed') is-invalid @enderror" id="breed" name="breed" placeholder="Insira a raça/SRD">
            </div>

            <div class="form-group col-lg-1">
                <label for="sex">Sexo</label>
                <select name="sex" id="" class="form-select @error ('sex') is-invalid @enderror">
                    <option value="">Selecione</option>                    
                    <option value="macho">M</option>
                    <option value="femea">F</option>
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="tutor">Tutor</label>
                <select name="tutor" id="" class="form-select @error ('tutor') is-invalid @enderror">
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

    @extends('layouts.modal')

@endsection