<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use estoque\Produto;
use Request;

class EventoController extends Controller {

    public function exibirCriarEvento() {
        session_start();
        return view('evento.criar');
    }

}