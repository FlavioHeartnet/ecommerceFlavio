<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{

    protected $fillable = ['nome','valor','estoque','categoria','foto','descricao'];


}
