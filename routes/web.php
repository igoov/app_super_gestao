<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('site.sobrenos');
Route::get('/login', function () { return 'Login'; })->name('site.login');
//nome, categoria, assunto, mensagem

//app
Route::prefix('/app')->group(function (){
    Route::get('/clientes', function () { return 'Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', function () { return 'Fornecedores'; })->name('app.fornecedores');
    Route::get('/produtos', function () { return 'Produtos'; })->name('app.produtos');
});

/* Verbo http 
get
post
put
patch 
delete 
options
*/