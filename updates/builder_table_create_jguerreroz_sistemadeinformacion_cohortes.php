<?php namespace Jguerreroz\Sistemadeinformacion\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateJguerrerozSistemadeinformacionCohortes extends Migration
{
    public function up()
    {
        Schema::create('jguerreroz_sistemadeinformacion_cohortes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('cohorte_fecha');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('jguerreroz_sistemadeinformacion_cohortes');
    }
}
