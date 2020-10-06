<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesController extends Controller
{



    public function index()
    {
        return view('clientes.novocliente');
    }

    public function criar(Request $request){

        $cliente = new Cliente();
        $cliente->nomeCliente = request('nomeCliente');
        $cliente->emailCliente = request('emailCliente');
        $cliente->nomeEmpresaCliente = request('nomeEmpresaCliente');
        $cliente->save();
        return redirect('/');
    }

}
