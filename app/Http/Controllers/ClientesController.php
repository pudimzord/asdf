<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClientesController extends Controller
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

    public function ver($id){

        $infoCliente = DB::table('clientes')->where('idCliente', $id)->first();
        $fichas = DB::table('fichas')->where('idCliente', $id)->get();
        return view('clientes.cliente', ['infoCliente'=> $infoCliente, 'fichas' => $fichas] );

    }

    public function editar($id){
        $cliente = Cliente::find($id);
        return view('clientes.editarcliente', compact('cliente'));
    }

    public function atualizar(Request $request, $id){
        // $request->validate([

        // ])

        $cliente= Cliente::find($id);
        $cliente->nomeCliente = $request->get('nomeCliente');
        $cliente->emailCliente = $request->get('emailCliente');
        $cliente->nomeEmpresaCliente = $request->get('nomeEmpresaCliente');
        $cliente->save();

        return redirect()->route('verCliente', [$cliente]);

    }


    public function eliminar ($id){
        $cliente = Cliente::find($id);
        $cliente->delete();

        return redirect()->route('home');
        // DB::table('fichas')->where('idCLiente', $id)->delete();
    }

}
