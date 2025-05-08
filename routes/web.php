<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

Route::get('/', function () {
    return view('Main-page/main-page');
});

Route::get('/informacoes-gerais', function () {
    return view('/General-info/general-info');
});

Route::get('/informacoes-angiospermas', function () {
    return view('/Angiosperm-info/angiosperm-info');
});

Route::get('/galeria', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/galeria/{id}', [GalleryController::class, 'index'])->name('gallery.show');

Route::get('/reproducao', function () {
    return view('/Angiosperm-reproduction/reproduction');
});

Route::get('/utilidades', function () {
    return view('/Angiosperm-utilities/utilities');
});

Route::get('/utilidades', function () {
    return view('/Angiosperm-utilities/utilities');
});


Route::get('/game', function () {
    return view('/Game-page/game');
});

Route::get('/bibliografia', function () {
    return view('/Bibliography/bibliography');
});
