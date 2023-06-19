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

// os parametros devem ser passados da direita na rota, para esquerda para não haver erros!
Route::get('/contato/{nome}/{idade?}', function (string $nome, int $idade = 0) {

    echo "Estamos aqui: $nome você tem a idade de: $idade anos";
});