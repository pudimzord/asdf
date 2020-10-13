<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichasOnDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasColumn('fichas', 'idCliente' ))
        {
            Schema::table('fichas', function (Blueprint $table) {
                $table->dropColumn(['idCliente']);
            });
        }else{
            Schema::table('fichas', function (Blueprint $table) {


                $table->unsignedBigInteger('idCliente');
                $table->foreign('idCliente')->references('idCliente')->on('clientes')->onDelete('cascade');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
