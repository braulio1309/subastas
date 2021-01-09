<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PujasMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pujas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('producto_id');
            $table->integer('subasta_id');
            $table->float('monto');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('subasta_id')->references('id')->on('subastas');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pujas');
    }
}
