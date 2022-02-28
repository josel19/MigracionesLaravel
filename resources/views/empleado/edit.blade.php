@extends('empleado.layout')
@section('content')
@csrf
<div class="container py-5 h-3 ">
<h1>Editar usuario  {{$empleado->Nombre}}</h1>
<form action="{{ url('/empleado/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{ method_field('PATCH') }}
@include('empleado.form')
</form>
</div
