<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use estoque\Produto;
use Request;

class AlunoController extends Controller {

    public function logar(){
        session_start();
        //unset($_COOKIE);
        return view('aluno.login');
    }

    function validarLogin() {
        session_start();
        $respostaAluno = DB::select('select * from aluno where prontuario = ? and senha = ?', [Request::input('login'), Request::input('senha')]);
        $respostaMae = DB::select('select * from aluno where prontuario = ? and senhaResponsavel = ?', [Request::input('login'), Request::input('senha')]);
        $pessoa = DB::select('select * from aluno where prontuario = ?', [Request::input('login')]);
        if(empty($respostaAluno) && empty($respostaMae)) {
            return redirect()->action('AlunoController@logar')->withInput(Request::only('erro'));
        }
        else {

            if(Request::input('lembreme')) {
                setcookie("login", Request::input('login'));
                setcookie("senha", Request::input('senha')); 
            }
            
            if(!empty($respostaAluno)) {
                $_SESSION["perfil"] = 'filho';
                $_SESSION['nome'] = $pessoa[0]->nome;
                return redirect()->action('AlunoController@mostrarTelaPrincipal');
            }
            
            if(!empty($respostaMae)) {
                $_SESSION["perfil"] = 'mae';
                $_SESSION['nome'] = 'responsável de ' . $pessoa[0]->nome;
                return redirect()->action('AlunoController@mostrarTelaPrincipal');
            }
        }

    }

    public function exibirCadastro() {
        return view('aluno.cadastro');
    }

    public function cadastrar() {
        $nome = Request::input('nome');
        $prontuario = Request::input('prontuario');
        $email = Request::input('email');
        $senha = Request::input('senhaAluno');
        $senhaResponsavel = Request::input('senhaMae');
        
        DB::insert('insert into aluno values (?, ?, ?, ?, ?)',
        array($prontuario, $nome, $email, $senha, $senhaResponsavel));
        
        return redirect()->action('AlunoController@logar')->withInput(Request::only('cad'));
    } 
    
    public function mostrarTelaPrincipal() {
        session_start();
        return view('aluno.index');
    }

    public function exibirCriarEvento() {
        session_start();
        return view('evento.criar');
    }

}