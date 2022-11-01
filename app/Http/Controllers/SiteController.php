<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index()
    {
        // Aqui eu poderia criar uma lógica
        // verificar se um usuário existe, buscar dados de um usuário

        return view('bemvindo');
    }
}
