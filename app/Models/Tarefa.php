<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    // AULA 01 Sobre eloquent
    // o eloquent já assume que o nome da tabela no banco é o mesmo nome do model, só que no plural e todo minusculo
    // protected $table = 'tarefas';
    // assume tbm que a chave primária é o id
    // protected $primaryKey = 'id';
    // assume tbm que esse campo já é auto increment
    // public $incrementing = true;
    // assume que esse campo é um int
    // protected $keyType = 'string';

    // created_at, updated_at
    // na maioria das model, terá essa configuração
    public $timestamps = false;

    protected $fillable = [ 'title' ];

    // Aqui é caso eu tenha esses campos no banco, só que com outro nome
    // const CREATED_AT = 'date_created';
    // const UPDATED_AT = 'date_updated';

    use HasFactory;
}
