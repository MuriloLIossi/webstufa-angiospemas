<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/informacoes-gerais', function () {
    return view('/Angiosperm-info/angiosperm-info');
});
