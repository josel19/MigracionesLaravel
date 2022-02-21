@extends('empleado.Layout')

@section('content')

<div class="container">
<h1>Usuarios</h1>

<table class="table table-dark table-striped">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Sexo</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->Foto}}</td>
            <td>{{ $empleado->Nombre}}</td>
            <td>{{ $empleado->Apellido}}</td>
            <td>{{ $empleado->Sexo}}</td>
            <td>{{ $empleado->Correo}}</td>
            <td>Editar | <form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                <input class="btn btn-danger"  type="submit" onclick="return confirm('¿Esta seguro de borrar este usuario?')"
                value="Borrar"> 
                </form>
            </td>
        </tr>
        @endforeach;
    </tbody>
  </table>
</div>

@endsection