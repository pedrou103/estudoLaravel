<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TarefasController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );

Route::get('/login', function() {
    echo 'Página de login';
})->name('login');

Route::get('/config', [SiteController::class, 'config'] );
Route::post('/config', [SiteController::class, 'config'] );

Route::prefix('/tarefas')->group(function() {
    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list')->middleware('auth'); // listagem de tarefas

    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add'); // tela de adição de nova tarefa
    Route::post('add', [TarefasController::class, 'addAction']); // ação de adição de nova tarefa

    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit'); //tela de edição
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //ação de edição

    Route::get('delete/{id}', [TarefasController::class, 'del'])->name('tarefas.del'); //ação de deletar

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done'); //marcar como resolvido ou não.
});

Route::resource('todo', TodoController::class);
// rotas que ele cria:
/*
GET    - /todo            - index   - todo.index   - lista de itens
GET    - /todo/create     - create  - todo.create  - form de criação
POST   - /todo            - store   - todo.store   - receber os dados e add item
GET    - /todo/{id}       - show    - todo.show    - item individual
GET    - /todo/{id}/edit  - edit    - todo.edit    - from de edição
PUT    - /todo/{id}       - update  - todo.update  - receber os dados e update item
DELETE - /todo/{id}       - destroy - todo.destroy - deletar o item
*/