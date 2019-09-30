<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
//use estoque\Produto;
use Request;

class UtilitarioController extends Controller {

    public function tables() {
        session_start();
        return view('utilitario.tables');
    }

    public function utilitiesColor() {
        session_start();
        return view('utilitario.utilitiesColor');
    }

    public function utilitiesBorder() {
        session_start();
        return view('utilitario.utilitiesBorder');
    }

    public function utilitiesAnimation() {
        session_start();
        return view('utilitario.utilitiesAnimation');
    }

    public function utilitiesOther() {
        session_start();
        return view('utilitario.utilitiesOther');
    }

    public function buttons() {
        session_start();
        return view('utilitario.buttons');
    }

    public function cards() {
        session_start();
        return view('utilitario.cards');
    }

    public function forgotPassword() {
        session_start();
        return view('utilitario.forgotPassword');
    }

    public function error404() {
        session_start();
        return view('utilitario.error404');
    }

    public function blank() {
        session_start();
        return view('utilitario.blank');
    }

    public function charts() {
        session_start();
        return view('utilitario.charts');
    }

}