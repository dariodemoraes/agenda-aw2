<?php

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

Route::get('/', 'AlunoController@logar');
Route::get('/cadastro', 'AlunoController@exibirCadastro');
Route::post('/cadastrar', 'AlunoController@cadastrar');
Route::post('/validacao', 'AlunoController@validarLogin');
Route::get('/index', 'AlunoController@mostrarTelaPrincipal');
Route::get('/criacao-evento', 'EventoController@exibirCriarEvento');
Route::post('/criar-evento', 'EventoController@criarEvento');
Route::get('/logout', 'AlunoController@logout');

//------------------

Route::get('/tables', 'UtilitarioController@tables');
Route::get('/utilities-color', 'UtilitarioController@utilitiesColor');
Route::get('/utilities-border', 'UtilitarioController@utilitiesBorder');
Route::get('/utilities-animation', 'UtilitarioController@utilitiesAnimation');
Route::get('/utilities-other', 'UtilitarioController@utilitiesOther');
Route::get('/buttons', 'UtilitarioController@buttons');
Route::get('/cards', 'UtilitarioController@cards');
Route::get('/forgot-password', 'UtilitarioController@forgotPassword');
Route::get('/404', 'UtilitarioController@error404');
Route::get('/blank', 'UtilitarioController@blank');
Route::get('/charts', 'UtilitarioController@charts');

//----------------

Route::get('/api', function() {
    return redirect('api');
});