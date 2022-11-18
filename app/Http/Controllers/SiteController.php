<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class SiteController extends Controller
{
    public function index() {

        $pessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Alessandro',
                'birth' => '29/01/90',
                'idade' => 29],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Bonieky',
                'birth' => '10/11/1933',
                'idade' => 90],

              [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Maria',
                'birth' => '01/01/2020',
                'idade' => 2]
        ];

        $dados['pessoas'] = $pessoas;

        return view('bemvindo', $dados);
    }

    public function config(Request $r) {

      $nome = 'Pedro';
      $idade = 12;

      // outra forma de passar
      $data = [
        'nome'=>$nome,
        'idade'=>$idade
      ];

      return view('config', ['nome'=>$nome, 'idade'=>$idade]);
    }

    public function __invoke()
    {
      // $list = Tarefa::all();
      // $list = Tarefa::find([ 1, 2 ]);
      // $list = Tarefa::where('resolvido', 0)->get();
      $list = Tarefa::where('resolvido', 0)->orWhere('resolvido', 1)->first();

      // foreach($list as $item) {
      //   echo $item->title."<br/>";
      // }

      // insert:
      $t = new Tarefa;
      $t->titulo = 'Testando pelo Eloquent';
      $t->save();
    }
}
