
@extends('empleado.layout')
@csrf
@section('content')

<div class="container py-5 h-3 ">
  <h1>Formulario Crud  Laravel</h1>
  <form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data" >
    @csrf
    @include('empleado.form')
  </form>
  </div>
@endsection


