<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionSemestres extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->string('nombre', 30)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_semestres', function($table)
        {
            $table->string('nombre', 20)->change();
        });
    }
}
