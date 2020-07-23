<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionSemestres6 extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->renameColumn('idcursos', 'id_curso');
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->renameColumn('id_curso', 'idcursos');
        });
    }
}
