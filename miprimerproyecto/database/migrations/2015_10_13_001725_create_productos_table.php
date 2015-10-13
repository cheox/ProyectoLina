<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('productos', function(Blueprint $table) {
            
            $table->increments('id');
            $table->string('codigo',10);
            $table->string('descripcion',100);
            $table->integer('cantidad_inventario');
            $table->integer('precio');
            $table->integer('descuento');
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
       Schema:: drop('productos');
    }
}
