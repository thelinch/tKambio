@extends('layouts.app')



@section('content')
<h5 class="d-flex justify-content-between mt-2">
    <span>Lista de tipo de cambios</span>
    <a class="btn btn-primary" href="/tc/create">Crear </a>

</h5>
<table class="table table-striped">
    <thead>
        <th>Venta</th>
        <th>Compra</th>
        <th>Acciones</th>

    </thead>
    <tbody>
        @foreach ($typeChanges as $typeChange)
        <tr>

            <td>{{ $typeChange['tc_venta'] }}</td>
            <td>{{ $typeChange['tc_compra'] }}</td>
            <td>
                <a class="btn btn-primary mr-2" href="/tc/edit/{{$typeChange['id']}}">Editar</a><a class="btn btn-danger" href="/tc/delete/{{$typeChange['id']}}">Eliminar</a>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>
<ul>

</ul>
@endsection