<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'OLA SEJAbemvindo';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre nos';
// });

Route::get('/contato/o{nome}', function (string $nome) {
    return 'OLA contato'.$nome;
});

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
