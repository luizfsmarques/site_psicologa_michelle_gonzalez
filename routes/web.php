<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContatoController;

// site

Route::get('/', function () {
    return view('site/home',['page'=>'home']);
});

Route::get('/politica_de_privacidade', function (){
    return view('site/politica_privacidade',['page'=>'politica_privacidade']);
});

Route::post('/contato/enviar-contato', [ContatoController::class,'enviar_contato']);
