<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return 'OLA SEJAbemvindo';
// });

// Route::get('/sobre-nos', function () {
//     return 'sobre nos';
// });

// Route::get(
//     '/contato/{nome}/{idade_id}',
//     function (
//         string $nome,
//         int $idade_id = 1
//     ) {
//         echo "OLA contato - $nome  - idade $idade_id";
//     }
// )->where('idade_id', '[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/', 'PrincipalController@principal');
Route::get('/sobre', 'SobreNosController@sobreNos');
Route::get('/contato', 'ContatoController@contato');

Route::get('/login', function () {
    return 'login';
});

Route::get('/clientes', function () {
    return 'client';
});

Route::get('/fornecedores', function () {
    return 'fornecedores';
});

Route::get('/produtos', function () {
    return 'produtos';
});
