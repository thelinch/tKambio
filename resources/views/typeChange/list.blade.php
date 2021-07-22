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
                <a class="btn btn-primary mr-2" href="/tc/edit/{{$typeChange['id']}}">Editar</a><a class="btn btn-danger" click="deleteTc()" data-id="{{$typeChange['id']}}">Eliminar</a>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    (function() {
        init()
        // your page initialization code here
        // the DOM will be available here

    })();


    async function deleteTc(tcId) {

        const {
            isConfirmed
        } = await Swal.fire({
            title: 'Desea Eliminar?',
            text: 'La accion es irreversible,aun asi desea continuar?',
            icon: 'question',
            showCancelButton: true
        })
        if (isConfirmed) {
            await fetch("/tc/delete/" + tcId)
            window.location.reload()
        }
    }

    function init() {
        const deleteTcButtons = document.getElementsByClassName("btn-danger")
        for (let index = 0; index < deleteTcButtons.length; index++) {
            const element = deleteTcButtons[index];
            element.addEventListener("click", function(event) {
                // presentar la cuenta de clicks realizados sobre el elemento con id "prueba"
                deleteTc(this.getAttribute('data-id'))
            }, false);

        }
    }
</script>
@endsection