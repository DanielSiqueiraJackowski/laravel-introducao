<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\DisciplinaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "<h1>Hello</h1>";
    //return view('welcome');
});

Route::resource('/curso', CursoController::class);
Route::resource('disciplinas', DisciplinaController::class);
