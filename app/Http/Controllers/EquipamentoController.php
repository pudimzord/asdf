<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use Illuminate\Support\Facades\Route;
class EquipamentoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        return view('clientes.equipamentos.novoequipamento');
    }

    public function criar(Request $request){
        $idCliente = Route::current()->parameter('id');
        $ficha = new Ficha();
        $ficha->idCliente = $idCliente;
        $ficha->nomeEquipamento = request('nomeEquipamento');
        $ficha->nSerie = request('nSerie');
        $ficha->validade = request('validade');
        $ficha->notas = request('notas');
        $ficha->save();
        return redirect()->route('verCliente', $idCliente);

    }
}
