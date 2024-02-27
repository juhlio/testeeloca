@extends('adminlte::page')

@section('title', ' Alterar Empresa')

@section('content_header')
<h1>Alterar Empresa </h1>
@endsection

@section('content')

<form method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card p-3 mb-3">



        <div class="row">

            <div class="col-md">
                <x-adminlte-input name="codigo" label="Código" fgroup-class="col-sm-12" readonly value="{{$cliente->codigo}}" />
            </div>


            <div class="col-md">
                <x-adminlte-input name="empresa" label="Empresa" fgroup-class="col-sm-12"  value="{{$cliente->empresa}}" />
            </div>


        </div>

        <div class="row">
            <div class="col-md">
                <x-adminlte-input name="razao_social" label="Razão Social" value="{{$cliente->razao_social}}" />
            </div>

        </div>


        <div class="row">

            <div class="col-md">
                <x-adminlte-input name="tipo" label="Tipo" fgroup-class="col-sm-12" readonly value="{{$cliente->tipo}}" />
            </div>


            <div class="col-md">
                <x-adminlte-input name="cpf_cnpj" label="Documento" fgroup-class="col-sm-12"  value="{{$cliente->cpf_cnpj}}" />
            </div>


        </div>




        <br><br>
        <div id="buttons">
            <button class="btn btn-block btn-success" type="submit"><i class="fas fa-upload"></i> Salvar </button>
        </div>

</form>
</div>


@endsection

@section('css')




@endsection
