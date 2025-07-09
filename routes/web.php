<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ahorro', function () {
    return view('ahorro');
});
Route::get('/aviso', function () {
    return view('aviso');
});
Route::get('/bolsa', function () {
    return view('bolsa');
});
Route::get('/conocenos', function () {
    return view('conocenos');
});
Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/formacion', function () {
    return view('formacion');
});
Route::get('/noticias', function () {
    return view('noticias');
});
