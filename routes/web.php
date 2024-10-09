<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/* Metodo para mostrar la vista de la tarea */
/*
Route::get('/', function () {
    return view('task.index');
});

Route::post('/', function () {
    print_r($_POST);
});

*/

/* Metodo para mostrar la vista de la tarea desde el controlador */
Route::get('/', [TaskController::class, 'index']);

Route::post('/', [TaskController::class, 'store']);

Route::delete('/{id}', [TaskController::class, 'destroy'])->name('task.destroy');
