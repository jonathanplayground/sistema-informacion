<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionCursos4 extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->renameColumn('codigo', 'id_curso');
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->renameColumn('id_curso', 'codigo');
        });
    }
}