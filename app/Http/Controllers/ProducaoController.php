<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProducaoController extends Controller
{
    //

    public function producao()
    {
        return view('producao.producaoMain');
    }
}
