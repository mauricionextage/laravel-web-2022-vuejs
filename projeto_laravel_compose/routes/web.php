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

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre', 'SobreNosController@sobreNos')->name('site.sobre');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login', function () {
    return 'login';
});
//APP
Route::prefix('/app')->group(function () {

    Route::get('/clientes', function () {
        return 'client';
    })->name('app.clientes');

    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function () {
        return 'produtos';
    })->name('app.produtos');
});


// Route::get('/rota2', function () {
//     return redirect()->route('site.index');
// })->name('site.rota2');


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');

//ROTA FALLBACK ROTA NAO EXISTENTE

Route::fallback(function () {
    echo 'A rota nao <a href="' . route('site.index') . '"> existe</a>';
});
