<?php namespace Jguerreroz\Sistemadeinformacion\Models;

use Model;

/**
 * Model
 */
class Cursos extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'jguerreroz_sistemadeinformacion_cursos';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

public $belongsTo = [
    'semestre' => ['Jguerreroz\Sistemadeinformacion\Models\Semestres', 'key' => 'id_semestre', 'otherKey' => 'id']
];
}
