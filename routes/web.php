<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/test', function(){
    return view('index2');
});

Route::post('/avaliacao', [DataController::class, 'avaliacao'])->name('avaliacao');

Route::post('/alerta', [DataController::class, 'alerta'])->name('alerta');