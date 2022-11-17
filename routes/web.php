<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\TarefasController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );

Route::get('/config', [SiteController::class, 'config'] );
Route::post('/config', [SiteController::class, 'config'] );

Route::prefix('/tarefas')->group(function() {
    Route::get('/', [TarefasController::class, 'list'])->name('tarefas.list'); // listagem de tarefas

    Route::get('add', [TarefasController::class, 'add'])->name('tarefas.add'); // tela de adição de nova tarefa
    Route::post('add', [TarefasController::class, 'addAction']); // ação de adição de nova tarefa

    Route::get('edit/{id}', [TarefasController::class, 'edit'])->name('tarefas.edit'); //tela de edição
    Route::post('edit/{id}', [TarefasController::class, 'editAction']); //ação de edição

    Route::get('delete/{id}', [TarefasController::class, 'del'])->name('tarefas.del'); //ação de deletar

    Route::get('marcar/{id}', [TarefasController::class, 'done'])->name('tarefas.done'); //marcar como resolvido ou não.
});