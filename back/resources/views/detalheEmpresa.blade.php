@extends('adminlte::page')

@section('title', 'Detalhes')

@section('content_header')
<h1>Detalhes de Empresa</h1>
@endsection

@section('content')

<div class="card p-3 mb-3">
    <div class="row">
        <div class="col-md">
            <strong>Id:</strong> {{$empresa->recnum}} <br>
            <strong>Código:</strong> {{$empresa->codigo}} <br>
            <strong>Empresa:</strong> {{$empresa->company}} <br>
            <strong>Sigla:</strong> {{$empresa->sigla}} <br>
            <strong>Razão Social:</strong> {{$empresa->razao_social}} <br>
        </div>
    </div>
    <div class="mt-3">
        <a class="btn btn-primary btn-lg" href="{{ route('alteraEmpresa', $empresa->recnum) }}">Alterar</a>
        <a class="btn btn-primary btn-lg" href="{{ route('listaEmpresas') }}">Todas Empresas</a>
    </div>
</div>

@endsection
