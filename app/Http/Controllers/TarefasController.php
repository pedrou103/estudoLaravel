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
        $r->validate([
            // 'title' => '|' ou
            'title' => ['required', 'string']
        ]);

        $title = $r->input('title');

        DB::insert('INSERT INTO tarefas (title) VALUES (:title)', [
            'title' => $title
        ]);

        return redirect()->route('tarefas.list');
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
        $r->validate([
            // 'title' => '|' ou
            'title' => ['required', 'string']
        ]);

        $title  = $r->input('title');

        DB::update('UPDATE tarefas SET title = :title WHERE id = :id', [
            'id' => $id,
            'title' => $title
        ]);

        return redirect()->route('tarefas.list');
    }

    public function del($id)
    {
        DB::delete('DELETE FROM tarefas WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('tarefas.list');
    }

    public function done($id)
    {
        // original: 0
        // 1 - 0 = 1

        // original: 1
        // 1 - 1 = 0

        DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id', [
            'id' => $id
        ]);

        return redirect()->route('tarefas.list');
    }
}
