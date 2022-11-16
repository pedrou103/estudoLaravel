<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
      // $data = $r->query('nome');
      $data = $r->query('cidade', 'Visitante'); //se for passado sem um dado, estamos setando o Visitante como padrão
      // $data = $r->input('nome');
      // $data = $r->all();
      // o all pega dados de qualquer tipo de requisição
      // o input prioriza os dados que vem do corpo da requisição, caso não tenha ele pega da url
      // o query pega apenas da url

      // print_r($data);

      // restringindo os dados que vem do form, só quero pegar esses
      // $dados = $r->only(['nome', 'idade']);

      // excluindo dados que vem na requisição, quero todos menos esses que foram passados no array
      $dados = $r->except(['cidade']);

      print_r($dados);

      $nome = $r->input('nome', 'Visitante');

      // echo "MEU NOME É: ".$nome;

      // assim ele verifica se existe, não se tá preenchido
      // if ($r->has('estado')) {

      // assim ele verifica se está faltando
      // $r->missing('estado')

      // assim ele verifica se existe o dado e se ele tá preenchido
      if ($r->filled('estado')) {
        // echo 'tem estado!';
      } else {
        // echo 'nn tem estado!';
      }

      $estado = $r->input('estado', 'SP');

      // echo "| estado: ".$estado;

      return view('config');
    }
}
