<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        
        // Se o formulário foi enviado (POST)
        if($request->isMethod('post')) {
            // Aqui você pode adicionar a lógica para salvar no banco futuramente
            // Exemplo: SiteContato::create($request->all());

            // Redireciona de volta para a página de contato com uma variável de sucesso na sessão
            return redirect()->route('site.contato')->with('sucesso', true);
        }

        // Se for apenas visualização (GET)
        return view('site.contato');
    }
}
