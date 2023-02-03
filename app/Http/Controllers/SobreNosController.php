<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    public function __construct(){
    }

    public function sobreNos(){
        return view('site.sobre-nos', 
        [
            'titulo' => 'Sobre-nós'   
        ]
    );
}
}
