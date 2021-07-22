@extends('layouts.app')



@section('content')
<h5 class="text-center">
    Edicion del tipo de cambio
</h5>
<div class="row justify-content-center">
    <form class="col-sm-12 col-md-4" method="POST" action="/tc/update">
        @csrf
        <div class=" row d-none">
            <div class="col-12">
                <div class="mb-3">
                    <input class="form-control" value="{{$typeChange['id']}}" type="number" name="id">
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Venta</label>
                    <input class="form-control" placeholder="precio de venta" value="{{$typeChange['tc_venta']}}" type="number" name="tc_venta">
                </div>
            </div>
        </div>
        <div class=" row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="control-label">Compra</label>
                    <input class="form-control" value="{{$typeChange['tc_compra']}}" placeholder="precio de compra" type="number" name="tc_compra">

                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <a type="button" href="/tc/all" class="btn btn primary">Cancelar</a>
            <button class="btn btn-primary">Editar</button>

        </div>
    </form>
</div>
@endsection