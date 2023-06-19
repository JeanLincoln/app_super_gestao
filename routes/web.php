<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/sobrenos', 'SobrenosController@principal');

Route::get('/contato', 'ContatoController@principal');

Route::get(
    '/contato/{nome}/{categoria_id?}',
    function (string $nome = 'Desconhecido', int $categoria_id = 1) {
        echo 'Estamos aqui:' . $nome . ' - ' . $categoria_id;
    }
    // o primeiro parametro e a variavel e o segundo a expressao regular
)->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');