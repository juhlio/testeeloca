@extends('adminlte::page')

@section('title', ' Nova CLiente')

@section('content_header')
<h1>Nova Cliente </h1>
@endsection

@section('content')

<form method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card p-3 mb-3">



        <div class="row">


            <div class="col-md">
                <x-adminlte-input name="empresa" label="Empresa" fgroup-class="col-sm-12" />
            </div>

            <div class="col-md">
                <x-adminlte-input name="codigo" label="Código" fgroup-class="col-sm-12" />
            </div>


        </div>

        <div class="row">
            <div class="col-md">
                <x-adminlte-input name="razao_social" label="Razão Social" />
            </div>

        </div>

        <div class="row">


        <x-adminlte-select name="tipo" label="Tipo"
                igroup-size="md">
                <x-adminlte-options :options="['PJ' => 'PJ','PF' => 'PF']"
                    empty-option="Escolha uma opção"/>
        </x-adminlte-select>

            <div class="col-md">
                <x-adminlte-input name="cpf_cnpj" label="CPF ou CNPJ" fgroup-class="col-sm-12" />
            </div>


        </div>




        <br><br>
        <div id="buttons">
            <button class="btn btn-block btn-success" type="submit"><i class="fas fa-upload"></i> Enviar </button>
        </div>

</form>
</div>


@endsection

@section('css')




@endsection
