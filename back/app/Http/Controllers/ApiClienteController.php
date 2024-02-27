<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ApiClienteController extends Controller
{
    public function list()
    {

        $clientes = Cliente::select()->get();

        $jsonList = json_encode($clientes);
        echo $jsonList;
    }

    public function store(Request $r)
    {
        $cliente = new cliente();
        $cliente->empresa = $r->input('empresa');
        $cliente->codigo = $r->input('codigo');
        $cliente->razao_social = $r->input('razao_social');
        $cliente->tipo = $r->input('tipo');
        $cliente->cpf_cnpj = $r->input('cpf_cnpj');
        $cliente->save();
    }

    public function update(Request $r, $id)
    {

        $cliente = Cliente::where('recnum', $id)->first();
        $cliente->empresa = $r->input('empresa');
        $cliente->codigo = $r->input('codigo');
        $cliente->razao_social = $r->input('razao_social');
        $cliente->tipo = $r->input('tipo');
        $cliente->cpf_cnpj = $r->input('cpf_cnpj');
        $cliente->save();
    }

    public function show($id)
    {

        $cliente = Cliente::where('recnum', $id)->first();
        $jsonList = json_encode($cliente);
        echo $jsonList;

    }

    public function delete($id)
    {

        $cliente = Cliente::where('recnum', $id)->first();
        $cliente->delete();
    }
}
