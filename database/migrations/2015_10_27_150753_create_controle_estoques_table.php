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
            $table->integer('idProduto')->unsigned();
            $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('cascade');
            $table->integer('estoqueAtual');
            $table->integer('idCompra')->unsigned();
            $table->foreign('idCompra')->references('id')->on('historico-compras')->onDelete('cascade');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
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
