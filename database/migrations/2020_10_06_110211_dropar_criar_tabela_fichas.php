<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DroparCriarTabelaFichas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('fichas');
        Schema::create('fichas', function (Blueprint $table){
            $table->id('idFicha');
            $table->foreignId('idCliente')->unsigned()->index();
            $table->string('nomeEquipamento');
            $table->integer('nSerie');
            $table->date('validade');
            $table->text('notas');
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
        Schema::dropIfExists('fichas');
    }
}
