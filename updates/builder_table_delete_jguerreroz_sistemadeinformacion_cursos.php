<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteJguerrerozSistemadeinformacionCursos extends Migration
{
    public function up()
    {
        Schema::dropIfExists('jguerreroz_sistemadeinformacion_cursos');
    }
    
    public function down()
    {
        Schema::create('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('nombre', 191);
            $table->integer('id_curso')->nullable();
            $table->integer('creditos')->nullable();
            $table->integer('h_asignado')->nullable();
            $table->integer('h_autonomo')->nullable();
            $table->integer('nota')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->integer('idsemestre');
        });
    }
}