<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

    protected $fillable = ['id', 'titulo', 'data', 'descricao', 'local', 'disciplina_id'];

    protected $hidden = ['aluno_prontuario'];

    protected $dates = ['deleted_at'];

    protected $table = "evento";
}