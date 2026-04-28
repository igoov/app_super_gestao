<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
    public function contato() {

        //dd(request()->all());
        return view('site.contato');
    }
}