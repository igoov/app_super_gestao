<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobre-nos', [SobreNosController::class, 'index']);
//nome, categoria, assunto, mensagem

Route::get(
    '/contato/{nome}/{categoria_id}',
    function(
        string $nome = 'desconhecido', 
        int $categoria_id = 1 // 1 - 'Informacao' 
    ){
        echo "Estamos aqui: $nome - $categoria_id";
    }
)->where('categoria_id', '[0-9]+')->where('nome','[A-Za-z]+');

/* Verbo http 
get
post
put
patch 
delete 
options
*/