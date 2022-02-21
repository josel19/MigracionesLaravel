
@extends('empleado.layout')
@csrf
@section('content')

<div class="container py-5 h-3 ">
  <h1>Formulario Crud  Laravel</h1>
  <!-- Formulario de datos-->
  <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="row mb-4">
      <div class="col">
          <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="Nombre" />      
      </div>
      <div class="col">
          <input type="text" id="Apellido" name="Apellido" class="form-control" placeholder="Apellidos" />
        </div>
        <div class="col">
          <input type="text" id="Sexo" name="Sexo" class="form-control" placeholder="Sexo" />      
        </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <input type="email" id="Correo" name="Correo" class="form-control" placeholder="Correo" />      
      </div>
      <div class="col">
        <input type="file" id="Foto" name="Foto" class="form-control"/>      
      </div>
    </div>
  
    <button type="submit" class="btn btn-dark btn-block mb-4" value="Guardar Datos">Crear</button>
  </form>
  </div>
@endsection


