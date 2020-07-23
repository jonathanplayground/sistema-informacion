<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJguerrerozSistemadeinformacionCursos extends Migration
{
    public function up()
    {
        Schema::create('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre');
            $table->integer('codigo')->unsigned();
            $table->integer('creditos')->unsigned();
            $table->integer('h_asignado')->unsigned();
            $table->integer('h_autonomo')->unsigned();
            $table->integer('nota')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jguerreroz_sistemadeinformacion_cursos');
    }
}