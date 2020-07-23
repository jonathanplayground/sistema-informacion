<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionCursos2 extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->integer('idsemestre');
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->dropColumn('idsemestre');
        });
    }
}
