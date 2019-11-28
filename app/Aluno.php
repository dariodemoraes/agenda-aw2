<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model {

    protected $fillable = ['nome', 'email'];

    protected $hidden = ['prontuario', 'senha', 'senhaResponsavel'];

    protected $dates = ['deleted_at'];

    protected $table = "aluno";
}