<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlugueisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alugueis', function (Blueprint $table) {
            $table->unsignedBigInteger('carro_id');
            $table->unsignedBigInteger('cliente_id');
            $table->date('data_aluguel');
            $table->date('data_devolucao');

            $table->foreign('carro_id')->references('id')->on('carros');
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->primary(array('carro_id', 'cliente_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluguels');
    }
}
