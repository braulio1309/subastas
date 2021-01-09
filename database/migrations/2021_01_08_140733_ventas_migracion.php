<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VentasMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('producto_id');
            $table->integer('subasta_id');
            $table->float('montofinal');
            $table->timestamps();
            
            $table->foreign('producto_id')->references('id')->on('productos');
            $table->foreign('subasta_id')->references('id')->on('subastas');
            $table->foreign('user_id')->references('id')->on('users');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
