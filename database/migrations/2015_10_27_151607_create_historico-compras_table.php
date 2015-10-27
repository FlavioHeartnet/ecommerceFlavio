<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoricoComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico-compras', function (Blueprint $table) {
            $table->increments('id');
            $table->double('totalCompra');
            $table->date('dataCompra');
            $table->string('pagamento');
            $table->string('status');
            $table->integer('idUser');
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
        Schema::drop('historico-compras');
    }
}
