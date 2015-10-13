<?php



use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema:: create('clientes', function(Blueprint $table) {
            $table->increments('id');
            $table->string('cedula',10);
            $table->string('nombre',100);
            $table->string('apellidos',100);
            $table->string('direccion',100);
            $table->string('email')->unique();
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
       Schema::drop('clientes');
    }
}
