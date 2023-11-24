@extends('plantilla')
@section('contenido')
<div class="row mt-3">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header bg-dark text-white">EDITAR CARRERA</div>
            <div class="card-body">
                <form id="frm carreras" method="POST" action="{{url('carreras',[$carrera])}}">
                    @method('PUT')
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-graduation-cap"></i></span>
                        <input type="text" name="carrera" value="{{$carrera->carrera}}" class="form-control" maxlenght="50" placeholder="Carrera" requerid>
                    </div>
                    <div class="d-grid col-6 mx-auto">
                        <button class="btn btn-dark"><i class="fa solid fa-flopp-disk"></i>Guardar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
