<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comprasIS extends Model
{
    protected  $fillable = ['idProduto', 'valorTotal', 'quantidade', 'idUser', 'Ordem'];


    public function user()
    {

        $this->belongsTo('App\User');
    }

}


