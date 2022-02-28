@extends('empleado.layout')
@section('content')

    <div class="row mb-4">
      <div class="col">
          <input type="text" id="Nombre" name="Nombre" value="{{ $empleado->Nombre}}"   class="form-control" placeholder="Nombre" />      
      </div>
      <div class="col">
          <input type="text" id="Apellido" name="Apellido" value="{{ $empleado->Apellido}}"   class="form-control" placeholder="Apellidos" />
        </div>
        <div class="col">
          <input type="text" id="Sexo" name="Sexo" value="{{ $empleado->Sexo}}"   class="form-control" placeholder="Sexo" />      
        </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <input type="email" id="Correo" name="Correo" value="{{ $empleado->Correo}}"   class="form-control" placeholder="Correo" />      
      </div>
      <div class="col">
        <input type="file" id="Foto" name="Foto" value="{{ $empleado->Foto}}"   class="form-control"/>      
      </div>
    </div>
  
    <button type="submit" class="btn btn-dark btn-block mb-4" value="Guardar Datos">Enviar</button>
 
