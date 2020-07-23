<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionSemestres2 extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->integer('idcursos')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->integer('idcursos')->nullable(false)->change();
        });
    }
}
