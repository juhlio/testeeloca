<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function list()
    {

        $empresa = Empresa::select()->get();

        $jsonList = json_encode($empresa);
        echo $jsonList;
    }

    public function store(Request $r)
    {
        $empresa = new empresa();
        $empresa->codigo = $r->input('codigo');
        $empresa->empresa = $r->input('empresa');
        $empresa->sigla = $r->input('sigla');
        $empresa->razao_social = $r->input('razao_social');
        $empresa->save();
    }

    public function update(Request $r, $id)
    {

        $empresa = Empresa::where('recnum', $id)->first();
        $empresa->empresa = $r->input('empresa');
        $empresa->sigla = $r->input('sigla');
        $empresa->razao_social = $r->input('razao_social');
        $empresa->save();
    }

    public function show($id)
    {

        $empresa = Empresa::where('recnum', $id)->first();
        $jsonList = json_encode($empresa);
        echo $jsonList;

    }

    public function delete($id)
    {

        $empresa = Empresa::where('recnum', $id)->first();
        $empresa->delete();
    }

}
