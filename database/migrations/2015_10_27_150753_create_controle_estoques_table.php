<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateControleEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controle_estoques', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProduto');
            $table->integer('estoqueAtual');
            $table->integer('idCompra');
            $table->integer('idUser');
            $table->string('tipo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('controle_estoques');
    }
}
