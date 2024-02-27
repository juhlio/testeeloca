<?php

namespace App\Http\Controllers;

use App\Models\Empresa;

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
}
