@extends('layouts.app')

@section('content')
<div>
    <form method="POST" action="{{alugar.carro}}">
        <div>
            <input type="text" name="cliente_id" placeholder="Digite o nome do cliente">
        </div>
        
        <div>
            <input type="text" name="carro_id" placeholder="Digite a placa do carro">
        </div>

        <div>
            <input type="text" name="carro_id" placeholder="Digite a placa do carro">
        </div>
    </form>
</div>
@endsection
