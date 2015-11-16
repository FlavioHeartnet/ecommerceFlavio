<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasISTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_i_s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idProduto')->unsigned();;
            $table->foreign('idProduto')->references('id')->on('produtos')->onDelete('cascade');
            $table->double('valorTotal');
            $table->integer('quantidade');
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
            $table->integer('Ordem');
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
        Schema::drop('compras_i_s');
    }
}
