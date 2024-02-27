@extends('adminlte::page')


@section('content')

<br>

<div class="card p-3 mb-3">



    <div class="col-md-4">

    <a class="btn btn-success" href="{{route('novoCliente')}}">Novo Cliente</a>

    </div>

    <br>

    <table id="example" class="hover" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Empresa</th>
                <th>Sigla</th>
                <th>Razão Social</th>
                <th>Detalhes</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->recnum}}</td>
                <td>{{$cliente->empresa}}</td>
                <td>{{$cliente->codigo}}</td>
                <td>{{$cliente->razao_social}}</td>
                <td>{{$cliente->tipo}}</td>
                <td>{{$cliente->cpf_cnpj}}</td>

                <td> <a class="btn btn-success" href="{{ route('detalheCliente', $cliente->recnum) }}">Detalhes</a> </td>
                <td> <a class="btn btn-danger" href="{{route('excluiCliente', $cliente->recnum) }}">Excluir</a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection


@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">


@endsection

@section('js')

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>


<script>
    $(document).ready(function() {
        $('#example').DataTable({
            "language": {
                "search": "Buscar",
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "info": "Página _PAGE_ de _PAGES_",
                "paginate": {
                    "previous": "Anterior",
                    "next": "Próxima",
                    "first": "Primeira",
                    "last": "Última"
                }
            },
            "order": [
                [0, 'desc']
            ] // Aqui está a opção para ordenar pelo ID (primeira coluna) de forma descendente


        });
    });
</script>

@endsection
