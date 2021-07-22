@extends('layouts.app')


@section('content')
<h5 class="text-center">
    Creacion del tipo de cambio
</h5>
<div class="row justify-content-center">
    <form class="col-sm-12 col-md-4" method="POST" action="/tc/create">
        @csrf
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Venta</label>
                    <input class="form-control" placeholder="precio de venta" type="number" name="tc_venta">
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Compra</label>
                    <input class="form-control" placeholder="precio de compra" type="number" name="tc_compra">

                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <a type="button" href="/tc/all" class="btn">Cancelar</a>
            <button class="btn btn-primary">Crear</button>

        </div>
    </form>
</div>
@endsection