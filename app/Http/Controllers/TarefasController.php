<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    //
    public function list()
    {
        $data_list = DB::select('SELECT * FROM tarefas');
        // $data_list = DB::select('SELECT * FROM tarefas WHERE resolvido = ?', [1]);
        // $data_list = DB::select('SELECT * FROM tarefas WHERE resolvido = :status', ['status' => 1]);

        return view('tarefas.list', [
            'list' => $data_list
        ]);
    }

    public function add()
    {

        return view('tarefas.add');
    }

    public function addAction(Request $r)
    {
        if ($r->filled('title')) {
            $title = $r->input('title');

            DB::insert('INSERT INTO tarefas (title) VALUES (:title)', [
                'title' => $title
            ]);

            // $url = route('tarefas.list');
            return redirect()->route('tarefas.list');
        } else {
            return redirect()
                ->route('tarefas.add')
                ->with('warning', 'Você não preencheu o title');
        }
    }

    public function edit($id)
    {
        $data = DB::select('SELECT * FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);

        if (count(($data)) > 0) {
            return view('tarefas.edit', [
                'data' => $data[0]
            ]);
        } else {
            return redirect()->route('tarefas.list');
        }
    }

    public function editAction(Request $r, $id)
    {
        if ($r->filled('title')) {
            $title  = $r->input('title');

            DB::update('UPDATE tarefas SET title = :title WHERE id = :id', [
                'id' => $id,
                'title' => $title
            ]);

            return redirect()->route('tarefas.list');
        } else {
            return redirect()
                ->route('tarefas.edit', ['id' => $id])
                ->with('warning', 'Você não preencheu o title');
        }
    }

    public function del()
    {
    }
    public function done()
    {
    }
}
