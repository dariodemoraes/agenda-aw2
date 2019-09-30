<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use estoque\Produto;
use Request;

class EventoController extends Controller {

    public function exibirCriarEvento() {
        session_start();
        $disciplinas = DB::select('select id, nome from disciplina');
        
        return view('evento.criar')->with('disciplinas', $disciplinas);
    }

    public function criarEvento() {
        session_start();
        $titulo = Request::input('titulo');
        $datahora = Request::input('data') .  ' ' . Request::input('hora');
        $disciplina = Request::input('disciplina');
        $local = Request::input('local');
        $descricao = Request::input('descricao');
        
        DB::insert('insert into evento (titulo, data, descricao, local, aluno_prontuario, disciplina_id) values (?, ?, ?, ?, ?, ?)',
        [$titulo, $datahora, $descricao, $local, $_SESSION['prontuario'], $disciplina]);
        
        return redirect()->action('AlunoController@mostrarTelaPrincipal')->withInput(Request::only('cad'));
    }

}