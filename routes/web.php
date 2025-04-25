<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Main-page/main-page');
});

Route::get('/informacoes-gerais', function () {
    return view('/General-info/general-info');
});

Route::get('/informacoes-angiospermas', function () {
    return view('/Angiosperm-info/angiosperm-info');
});

Route::get('/reproducao', function () {
    return view('/Angiosperm-reproduction/reproduction');
});

Route::get('/utilidades', function () {
    return view('/Angiosperm-utilities/utilities');
});

Route::get('/utilidades', function () {
    return view('/Angiosperm-utilities/utilities');
});

Route::get('/galeria', function () {
    return view('/Gallery/gallery');
});

Route::get('/game', function () {
    return view('/Game-page/game');
});

Route::get('/bibliografia', function () {
    return view('/Bibliography/bibliography');
});
