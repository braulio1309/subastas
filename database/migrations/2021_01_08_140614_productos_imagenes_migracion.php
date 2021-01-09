<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductosImagenesMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_imagenes', function (Blueprint $table) {
            $table->id();
            $table->integer('producto_id');
            $table->string('ruta');
            $table->timestamps();

            $table->foreign('producto_id')->references('id')->on('productos');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_imagenes');
    }
}
