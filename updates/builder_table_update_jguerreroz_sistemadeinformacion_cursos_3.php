<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionCursos3 extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->integer('codigo')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->integer('codigo')->nullable(false)->change();
        });
    }
}
