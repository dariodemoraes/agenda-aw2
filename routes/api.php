<?php

use Illuminate\Http\Request;
use App\Aluno;
use App\Evento;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/aluno', function () {
    $alunos = (array) aluno::all();
    echo json_encode($alunos);
});

Route::get('/evento', function () {
    $eventos = (array) evento::all();
    echo json_encode($eventos);
});


