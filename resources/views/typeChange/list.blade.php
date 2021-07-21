@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div>
    <h5>Lista de tipo de cambios</h5>
    <a href="/tc/create">Crear </a>
    <ul>
        @foreach ($typeChanges as $typeChange)
        <li><strong>Venta:</strong> {{ $typeChange['tc_venta'] }} <strong>Compra:</strong>{{$typeChange['tc_compra']}}</li>

        @endforeach
    </ul>
</div>
@endsection

