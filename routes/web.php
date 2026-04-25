<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get('/', [PrincipalController::class, 'principal']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/sobre-nos', [SobreNosController::class, 'index']);
//nome, categoria, assunto, mensagem

/* Verbo http 
get
post
put
patch 
delete 
options
*/