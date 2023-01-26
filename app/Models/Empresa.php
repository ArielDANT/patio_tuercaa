<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Empresa
 * @package App\Models
 * @version January 26, 2023, 4:31 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property string $emp_nombre
 * @property string $emp_ruc
 * @property string $emp_telefono
 * @property string $emp_direccion
 * @property string $emp_correo
 */
class Empresa extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'empresa';
    protected $primaryKey='emp_id';
    public $timestamps=false;
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_nombre',
        'emp_ruc',
        'emp_telefono',
        'emp_direccion',
        'emp_correo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'emp_id' => 'integer',
        'emp_nombre' => 'string',
        'emp_ruc' => 'string',
        'emp_telefono' => 'string',
        'emp_direccion' => 'string',
        'emp_correo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_nombre' => 'required|string|max:255',
        'emp_ruc' => 'required|string|max:255',
        'emp_telefono' => 'required|string|max:255',
        'emp_direccion' => 'required|string|max:255',
        'emp_correo' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehiculos()
    {
        return $this->hasMany(\App\Models\Vehiculo::class, 'emp_id');
    }
}
