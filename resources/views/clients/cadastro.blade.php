@extends('layouts.main')
@section('title', 'Cadastro de clientes')
@section('content')

	<h2 class="" id="">Cadastrar cliente</h2>

    @if ($errors->any())
        @section('scripts')
            <script type="text/javascript">
                modal()
            </script>
        @endsection
    @endif

    <form action="/clients" method="post">
        @csrf
        <div class="row" id="">
            <div class="form-group col-lg-3">
                <label for="client_name">Nome</label>
                <input type="text" name="client_name" class="form-control @error('client_name') is-invalid @enderror" id="client_name"  placeholder="Insira o nome" value="{{ old('client_name') }}">
            </div>
            <div class="form-group col-lg-3">
                <label for="client_lastname">Sobrenome</label>
                <input type="text" class="form-control @error('client_lastname') is-invalid @enderror" id="client_lastname" name="client_lastname" placeholder="Insira o sobrenome" value="{{ Request::old('client_lastname') }}">
            </div>

            <div class="form-group col-lg-2">
                <label for="phone">Telefone</label>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Insira o tel" value="{{ Request::old('phone') }}">
            </div>
            <div class="form-group col-lg-4">
                <label for="email">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Insira o email" value="{{ Request::old('email') }}">
            </div>
        </div>


        <div class="row" id="">
            <div class="form-group col-lg-2">
                <label for="zipcode">CEP</label>
                <input type="text" class="form-control @error('zipcode') is-invalid @enderror" id="cep" name="zipcode" placeholder="Insira o CEP" value="{{ Request::old('zipcode') }}">
            </div>

            <div class="form-group col-lg-4">
                <label for="street">Logradouro</label>
                <input type="text" class="form-control @error('street') is-invalid @enderror" id="logradouro" name="street" placeholder="Insira o logradouro" value="{{ Request::old('street') }}">
            </div>

            <div class="form-group col-lg-1">
                <label for="address_num">Número</label>
                <input type="text" class="form-control @error('address_num') is-invalid @enderror" id="address_num" name="address_num" placeholder="Nº" value="{{ Request::old('address_num') }}">
            </div>


            <div class="form-group col-lg-4">
                <label for="city">Cidade</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="localidade" name="city" placeholder="Insira a cidade" value="{{ Request::old('city') }}">
            </div>
            <div class="form-group col-lg-1">
                <label for="initials">UF</label>
                <input type="text" class="form-control @error('initials') is-invalid @enderror" id="uf" name="initials" placeholder="UF" value="{{ Request::old('initials') }}" maxlength="2"


                onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)">
            </div>

            <div class="row justify-content-center" id="">
                <div class="form-group col-lg-6 mt-5 text-center">
                    <input type="submit" class="btn btn-outline-light btn-geral w-50 mb-5" value="Cadastrar" name="" id="btnCadastrar">
                </div>
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