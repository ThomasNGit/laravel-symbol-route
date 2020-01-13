<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function primaPagina(){

        return view('PaginaFinale1');

    }

    public function secondaPagina(){

        return view('PaginaFinale2');

    }
}
