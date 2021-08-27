@extends('layouts.main')
@section('title', 'Editar - ' . $pet->pet_name)
@section('content')

	<h2 class="" id="">Editar dados de {{ $pet->pet_name }}</h2>

    @if($errors->any())
        @section('scripts')
            <script type="text/javascript">
                modal()
            </script>
        @endsection
    @endif

    <form action="/pets/update/{{ $pet->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="pet_name">Nome</label>
                <input type="text" class="form-control @error ('pet_name') is-invalid @enderror" id="pet_name" name="pet_name" placeholder="Insira o nome" value="{{ $pet->pet_name }}">
            </div>
            <div class="form-group col-lg-2">
                <label for="species">Espécie</label>
                <input type="text" class="form-control @error ('species') is-invalid @enderror" id="species" name="species" placeholder="Insira a espécie"  value="{{ $pet->species }}">
            </div>

            <div class="form-group col-lg-3">
                <label for="breed">Raça/SRD</label>
                <input type="text" class="form-control @error ('breed') is-invalid @enderror" id="breed" name="breed" placeholder="Insira a raça/SRD"  value="{{ $pet->breed }}">
            </div>

            <div class="form-group col-lg-2">
                <label for="sex">Sexo</label>
                <select name="sex" id="" class="form-control @error ('sex') is-invalid @enderror">
                    <option value="{{ $pet->sex }}">{{ $pet->sex }}  (Atual)</option>                    
                    <option value="macho">Macho</option>
                    <option value="femea">Fêmea</option>
                    
                </select>
            </div>

            <div class="form-group col-lg-3">
                <label for="tutor">Tutor</label>
                <select name="tutor" id="" class="form-control @error ('tutor') is-invalid @enderror">
                    <option value="{{ $pet->client_id }}">{{ $pet->client_name }} {{ $pet->client_lastname }} (Atual)</option>
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->client_name }} {{ $client->client_lastname }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row" id="">           
            <div class="form-group col-lg-12">
                <label for="observations">Obsevações</label>
                <div class="form-floating">
                    <textarea class="form-control @error ('observations') is-invalid @enderror" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="observations">{{ $pet->observations }}</textarea>
                    {{-- <label for="floatingTextarea2">Insira as observações(Alérgico a perfume, a um remédio específico, etc.)</label> --}}
                </div>
            </div>
        </div>

        <div class="row justify-content-center" id="">
            <div class="form-group col-lg-6 mt-5 text-center">
                <input type="submit" class="btn btn-outline-light btn-geral w-50" value="Atualizar" name="" id="">
            </div>
        </div>
    </form>

    @extends('layouts.modal')

@endsection