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

        // $id = 1;
        $nome = 'Pedro';
        // $idade = 21;
        // $sobrenome = 'Moreira';
        // $data_nascimento = '18/05/2001';

        $data = [
            // 'id' => $id,
            'name' => $nome
            // 'age' => $idade,
            // 'sobrenome' => $sobrenome,
            // 'data_nasc' => $data_nascimento
        ];

        return view('bemvindo', $data);
    }

    public function exit()
    {

        return view('sair');
    }

    public function users(Request $r)
    {
        $data = [
            'quantidade' => $r->qnt
        ];

        return view('usuarios', $data);
    }
}
