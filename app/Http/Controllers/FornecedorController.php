<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index (){
        $fornecedores = [
             1 => [
                'nome' => 'Fornecedor 1',
                'status' =>  'S',
                'cnpj' => null,
                'ddd' => '89', //Picos (PI)
                'telefone' => '0000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 2', 
                'status' =>  'S',
                'cnpj' => null,
                'ddd' => '11', //Sao paulo (SP)
                'telefone' => '0000-0000'
            ],
            3 => [
                'nome' => 'Fornecedor 3', 
                'status' =>  'S',
                'cnpj' => null,
                'ddd' => '32', //Juiz de fora (MG)
                'telefone' => '0000-0000'
            ]
            
        
        ];

        //condicao ? se verdadeiro : se falso;
        //condicao ? se verdadeiro : (condicao ? se verdadeiro : se falso;);

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
