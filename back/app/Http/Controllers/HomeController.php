<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Cliente;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function listaEmpresas()
    {

        $empresas = Empresa::select()->get();
        return view(
            'listaempresas',
            ['empresas' => $empresas]
        );
    }

    public function novaEmpresa()
    {

        return view('novaEmpresa');
    }

    public function gravaEmpresa()
    {

        $codigo = filter_input(INPUT_POST, 'codigo');
        $company = filter_input(INPUT_POST, 'company');
        $sigla = filter_input(INPUT_POST, 'sigla');
        $razao_social = filter_input(INPUT_POST, 'razao_social');


        $empresa = new Empresa();
        $empresa->codigo = $codigo;
        $empresa->company = $company;
        $empresa->sigla = $sigla;
        $empresa->razao_social = $razao_social;
        $empresa->save();


        return redirect()->route('listaEmpresas');
    }

    public function detalheEmpresa($id)
    {


        $empresa = Empresa::where('recnum', $id)->first();

        return view(
            'detalheEmpresa',
            ['empresa' => $empresa]
        );
    }

    public function alteraEmpresa($id)
    {
        $empresa = Empresa::where('recnum', $id)->first();

        return view(
            'alteraEmpresa',
            ['empresa' => $empresa]
        );
    }

    public function gravaAlteracaoEmpresa($id)
    {

        $empresa = Empresa::where('recnum', $id)->first();
        $empresa->sigla = filter_input(INPUT_POST, 'sigla');
        $empresa->razao_social = filter_input(INPUT_POST, 'razao_social');
        $empresa->save();

        return redirect()->route('detalheEmpresa', $id);
    }


    public function listaClientes()
    {

        $clientes = Cliente::select()->get();
        return view(
            'listaClientes',
            ['clientes' => $clientes]
        );
    }

    public function novoCliente()
    {

        return view('novoCliente');
    }

    public function gravaCliente()
    {

        $empresa = filter_input(INPUT_POST, 'empresa');
        $codigo = filter_input(INPUT_POST, 'codigo');
        $razao_social = filter_input(INPUT_POST, 'razao_social');
        $tipo = filter_input(INPUT_POST, 'tipo');
        $cpf_cnpj = filter_input(INPUT_POST, 'cpf_cnpj');

        $cliente = new Cliente();
        $cliente->empresa = $empresa;
        $cliente->codigo = $codigo;
        $cliente->razao_social = $razao_social;
        $cliente->tipo = $tipo;
        $cliente->cpf_cnpj = $cpf_cnpj;
        $cliente->save();

        return redirect()->route('listaClientes');
    }

    public function detalheCliente($id)
    {
        $cliente = Cliente::where('recnum', $id)->first();

        return view(
            'detalheCliente',
            ['cliente' => $cliente]
        );
    }

    public function alteraCliente($id)
    {
        $cliente = Cliente::where('recnum', $id)->first();

        return view(
            'alteraCliente',
            ['cliente' => $cliente]
        );
    }

    public function gravaAlteracaoCliente($id)
    {

        $cliente = Cliente::where('recnum', $id)->first();
        $cliente->empresa = filter_input(INPUT_POST, 'empresa');
        $cliente->razao_social = filter_input(INPUT_POST, 'razao_social');
        $cliente->tipo = filter_input(INPUT_POST, 'tipo');
        $cliente->cpf_cnpj = filter_input(INPUT_POST, 'cpf_cnpj');
        $cliente->save();

        return redirect()->route('detalheCliente', $id);
    }

    public function excluiCliente($id)
    {



        $cliente = Cliente::where('recnum', $id)->first();
        $cliente->delete();

        return redirect()->back();
    }
}
