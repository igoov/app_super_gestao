<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get('/', [PrincipalController::class, 'principal']);
Route::get('/contato', [ContatoController::class, 'contato']);
Route::get('/sobre-nos', [SobreNosController::class, 'index']);
//nome, categoria, assunto, mensagem

Route::get('/login', function () { return 'Login'; });
Route::get('/clientes', function () { return 'Clientes'; });
Route::get('/fornecedores', function () { return 'Fornecedores'; });
Route::get('/produtos', function () { return 'Produtos'; });

/* Verbo http 
get
post
put
patch 
delete 
options
*/