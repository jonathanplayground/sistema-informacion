<?php namespace Jguerreroz\Sistemadeinformacion\Models;

use Model;

/**
 * Model
 */
class Estudiantes extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jguerreroz_sistemadeinformacion_estudiantes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
