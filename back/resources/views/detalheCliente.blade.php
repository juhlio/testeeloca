@extends('adminlte::page')

@section('title', 'Detalhes do Cliente')

@section('content_header')
<h1>Detalhes do Cliente</h1>
@endsection

@section('content')

<div class="card p-3 mb-3">
    <div class="row">
        <div class="col-md">
            <strong>Id:</strong> {{$cliente->recnum}} <br>
            <strong>Código:</strong> {{$cliente->codigo}} <br>
            <strong>Empresa:</strong> {{$cliente->empresa}} <br>
            <strong>Razão Social:</strong> {{$cliente->razao_social}} <br>
            <strong>Tipo:</strong> {{$cliente->tipo}} <br>
            <strong>Documento:</strong> {{$cliente->cpf_cnpj}} <br>
        </div>
    </div>
    <div class="mt-3">
        <a class="btn btn-primary btn-lg" href="{{ route('alteraCliente', $cliente->recnum) }}">Alterar</a>
        <a class="btn btn-primary btn-lg" href="{{ route('listaClientes') }}">Todas Clientes</a>
    </div>
</div>

@endsection
