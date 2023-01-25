<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empleados
 * @package App\Models
 * @version January 24, 2023, 3:53 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $users
 * @property string $epl_nombres
 * @property string $epl_apellidos
 * @property string $epl_cedula
 * @property string $epl_direccion
 * @property string $epl_correo
 * @property integer $epl_estado
 */
class Empleados extends Model
{
 // use SoftDeletes;

    use HasFactory;

    public $table = 'empleados';
    protected $primaryKey='epl_id';
    public $timestamps=false;
 //   const CREATED_AT = 'created_at';
 //   const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'epl_nombres',
        'epl_apellidos',
        'epl_cedula',
        'epl_direccion',
        'epl_correo',
        'epl_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'epl_id' => 'integer',
        'epl_nombres' => 'string',
        'epl_apellidos' => 'string',
        'epl_cedula' => 'string',
        'epl_direccion' => 'string',
        'epl_correo' => 'string',
        'epl_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'epl_nombres' => 'required|string|max:255',
        'epl_apellidos' => 'required|string|max:255',
        'epl_cedula' => 'required|string|max:255',
        'epl_direccion' => 'required|string|max:255',
        'epl_correo' => 'required|string|max:255',
        'epl_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function users()
    {
        return $this->hasMany(\App\Models\User::class, 'epl_id');
    }
}
