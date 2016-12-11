<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Percurso extends Model
{
    protected $fillable=array('name', 'idEditor', 'descricao');
    public $timestamps = false;
}
