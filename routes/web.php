<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('task.index');
});

Route::post('/', function () {
    print_r($_POST);
});
