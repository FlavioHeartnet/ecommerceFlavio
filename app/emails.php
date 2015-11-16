<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emails extends Model
{
    protected $table = 'produtos';

    protected $fillable = ['nome','valor','estoque','categoria','foto','descricao'];
}
