@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
@parent

<p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<div class="row justify-content-center">
    <form class="col-sm-12 col-md-4" method="POST" action="/tc/create">
        @csrf
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Venta</label>
                    <input class="form-control" placeholder="Nombre de producto" value="{{$typeChange['tc_venta']}}" type="number" name="tc_venta">
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Compra</label>
                    <input class="form-control" value="{{$typeChange['tc_compra']}}" placeholder="Nombre de producto" type="number" name="tc_compra">

                </div>
            </div>
        </div>
        <div class="row">
            <button class="btn btn primary">Editar</button>
            <a type="button" href="/tc/all" class="btn btn primary">Cancelar</a>

        </div>
    </form>
</div>
@endsection