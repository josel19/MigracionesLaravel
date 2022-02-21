<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

//Creamos una ruta para poder acceder a todos
Route::resource('/empleado',EmpleadoController::class);
