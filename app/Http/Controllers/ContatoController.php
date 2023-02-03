<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all();

        return view('site.contato', [ 'titulo' => 'Contato', 'motivo_contatos' => $motivo_contatos ] );
    }

    public function salvar(Request $request){
        // SiteContato::create($request->all());

        $request->validate([
            "nome" => 'required|min:3|max:40|unique:site_contatos',
            "telefone" => 'required',
            "email" => 'required',
            "motivo_contatos_id" => 'required',
            "mensagem" => 'required|max:200'
        ],
        [
            'nome.required' => 'Esse campo é obrigatório',
            'nome.min' => 'Minimo de 3 caracteres',

        ]
    );

        SiteContato::create($request->all());

        return redirect()->route('site.index');


    }
}
