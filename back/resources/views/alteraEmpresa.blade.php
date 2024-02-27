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
                <x-adminlte-input name="codigo" label="Código" fgroup-class="col-sm-12" readonly value="{{$empresa->codigo}}" />
            </div>


            <div class="col-md">
                <x-adminlte-input name="company" label="Empresa" fgroup-class="col-sm-12" readonly value="{{$empresa->company}}" />
            </div>



            <div class="col-md">
                <x-adminlte-input name="sigla" label="Sigla" fgroup-class="col-sm-12" value="{{$empresa->sigla}}" />
            </div>

        </div>

        <div class="row">
            <div class="col-md">
                <x-adminlte-input name="razao_social" label="Razão Social" value="{{$empresa->razao_social}}" />
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
