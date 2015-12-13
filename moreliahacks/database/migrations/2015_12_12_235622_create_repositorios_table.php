<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepositoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('repositorios', function(Blueprint $table) {
                $table->increments('id');
                $table->string('nombre');
$table->text('descripcion');
$table->text('autores');
$table->date('fecha_publicacion');
$table->string('link');
$table->string('etiquetas');
$table->string('inputs');
$table->string('outputs');
$table->string('lenguaje_backend');
$table->string('lenguaje_frontend');

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
        Schema::drop('repositorios');
    }

}
