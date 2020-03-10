@extends('plantilla.app')
@section('name' ,'| inicio')
@section('content')
 <div class="containar">
    <div class="jumbotron bg-primary">
         <h1 class="display-6 text-center text-white">Bienbenido, !CRUD-ESTUDIANTE¡</h1>
          <p class="lead text-center text-white">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    </div>
  </div>
<h1 class="m-2 p-4 text-center text-success">Listados de los estudiantes</h1>
<a href="{{  route('estudiante.create') }}" class="btn btn-success mb-2">Agregar</a> 
  <br>
  <div class="container">
  	   
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Nombre</th>
                 <th>Apellido</th>
                 <th>Telefono</th>
                 <th>Descripción</th>
                 <th colspan="2">Acción</th>
              </tr>
           </thead>
           <tbody>
              @foreach($estudiantes as $estudiante)
              <tr>
                 <td>{{ $estudiante->id }}</td>
                 <td>{{ $estudiante->nombre}}</td>
                 <td>{{ $estudiante->apellido }}</td>
                 <td>{{ $estudiante->telefono }}</td>
                 <td>{{ $estudiante->descripcion}}</td>
                 
                 <td><a href="{{ route('estudiante.edit', $estudiante->id) }}" class="btn btn-primary">Editar</a></td>
                 <td>
                  <form action="{{ route('estudiante.destroy', $estudiante->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $estudiantes->links() !!}
  </div>

@endsection