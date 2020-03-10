@extends('plantilla.app')
@section('name' ,'| Agregar')
@section('content')
<form action="{{ route('estudiante.update', $student_info->id) }}" method="POST" name="update_Student">
@csrf
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Nombre</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese Nombre" value="{{ $student_info->nombre }}">
            <span class="text-danger">{{ $errors->first('nombre') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Apellido</strong>
            <input type="text" name="apellido" class="form-control" placeholder="Ingrese Apellido" value="{{ $student_info->apellido }}">
            <span class="text-danger">{{ $errors->first('apellido') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Telefono</strong>
            <input type="text" name="telefono" class="form-control" placeholder="Ingrese telefono" value="{{ $student_info->telefono }}">
            <span class="text-danger">{{ $errors->first('telefono') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Descripción</strong>
            <textarea class="form-control" col="4" name="descripcion" placeholder="Ingrese Descripción" >{{ $student_info->descripcion }}</textarea>
            <span class="text-danger">{{ $errors->first('descripcion') }}</span>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
 
</form>
@endsection