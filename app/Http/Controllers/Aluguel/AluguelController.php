<?php

namespace App\Http\Controllers\Aluguel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AluguelController extends Controller
{

    public function locacoes()
    {
        return view('aluguel.alugar');
    }

    public function alugar(Request $request){
        $request->validate([
        'cliente_id' => 'required',
        'carro_id' => 'required',
        'dataAluguel' => 'required'
        ]);
    }
}
