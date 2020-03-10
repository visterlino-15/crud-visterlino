@extends('plantilla.app')
@section('name' ,'| Agregar')
@section('content')
<h1>Agregar los estudinate</h1>
<form action="{{ route('estudiante.store') }}" method="POST" name="add_Student">
{{ csrf_field() }}
 
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese nombre">
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>
    </div>
     <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Apellido</strong>
            <input type="text" name="apellido" class="form-control" placeholder="Ingrese apellido">
            <span class="text-danger">{{ $errors->first('apellido') }}</span>
        </div>
    </div>
     <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Telefono</strong>
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono">
            <span class="text-danger">{{ $errors->first('telefono') }}</span>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese Descripción"></textarea>
            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
        </div>
    </div>
    <div class="col-md-6 offset-md-3">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection