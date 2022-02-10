@extends('layouts.app')

<head>
    {{-- <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}"> --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

@section('content')
    <div class="container">
        <div class="col-md-5">
            <div class="justify-content-center">
                <form method="POST" action="{{ route('alugar.carro') }}">
                    @csrf
                    <div class="form-group">
                        <label for="cliente">Cliente</label>
                        <input class="form-control" id="cliente" type="text" name="cliente_id" placeholder="Digite o nome do cliente" >
                    </div>

                    <div>
                        <label for="carro">Carro</label>
                        <input class="form-control" id="carro" type="text" name="carro_id" placeholder="Digite o nome do carro">
                    </div>

                    <div>
                        <label for="dataLocacao">Data de Locação</label>
                        <input id="dataLocacao" class="mb-5 form-control" type="date" name="dataLocacao">
                    </div>

                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('site/jquery.js') }}"></script>
    <script src="{{ asset('site/bootstrap.js') }}"></script>
@endsection
