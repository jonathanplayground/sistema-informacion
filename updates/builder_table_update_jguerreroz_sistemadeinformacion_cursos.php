<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateJguerrerozSistemadeinformacionCursos extends Migration
{
    public function up()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->integer('codigo')->nullable()->unsigned(false)->change();
            $table->integer('creditos')->nullable()->unsigned(false)->change();
            $table->integer('h_asignado')->nullable()->unsigned(false)->change();
            $table->integer('h_autonomo')->nullable()->unsigned(false)->change();
            $table->integer('nota')->nullable()->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('jguerreroz_sistemadeinformacion_cursos', function($table)
        {
            $table->integer('codigo')->nullable(false)->unsigned()->change();
            $table->integer('creditos')->nullable(false)->unsigned()->change();
            $table->integer('h_asignado')->nullable(false)->unsigned()->change();
            $table->integer('h_autonomo')->nullable(false)->unsigned()->change();
            $table->integer('nota')->nullable(false)->unsigned()->change();
        });
    }
}
