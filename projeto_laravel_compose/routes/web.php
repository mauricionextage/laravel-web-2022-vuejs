<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'OLA SEJAbemvindo';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre nos';
// });

// Route::get('/contato', function () {
//     return 'OLA contato';
// });

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');
