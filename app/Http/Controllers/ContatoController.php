<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
           (object)["nome"=>"Maria","tel"=>"24900755"],
            (object)["nome"=>"Joao","tel"=>"89562321"]

        ];
        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req){
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar(){
        return "Esse é o Editar do ContatoController";
    }
}
