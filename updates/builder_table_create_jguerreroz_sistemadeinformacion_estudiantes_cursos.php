<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJguerrerozSistemadeinformacionEstudiantesCursos extends Migration
{
    public function up()
    {
        Schema::create('jguerreroz_sistemadeinformacion_estudiantes_cursos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('id_cursos');
            $table->integer('id_estudiantes');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jguerreroz_sistemadeinformacion_estudiantes_cursos');
    }
}
