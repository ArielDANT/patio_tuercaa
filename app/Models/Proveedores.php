<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Proveedores
 * @package App\Models
 * @version January 26, 2023, 5:27 pm UTC
 *
 * @property string $pro_nombres
 * @property string $pro_apellidos
 * @property string $pro_direccion
 * @property string $pro_telefono
 * @property string $pro_correo
 * @property string $pro_cedula
 * @property string $pro_descripcion
 * @property string $pro_estado
 */
class Proveedores extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'proveedores';
    protected $primaryKey='pro_id';
    public $timestamps=false;
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pro_nombres',
        'pro_apellidos',
        'pro_direccion',
        'pro_telefono',
        'pro_correo',
        'pro_cedula',
        'pro_descripcion',
        'pro_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'pro_id' => 'integer',
        'pro_nombres' => 'string',
        'pro_apellidos' => 'string',
        'pro_direccion' => 'string',
        'pro_telefono' => 'string',
        'pro_correo' => 'string',
        'pro_cedula' => 'string',
        'pro_descripcion' => 'string',
        'pro_estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pro_nombres' => 'required|string|max:255',
        'pro_apellidos' => 'required|string|max:255',
        'pro_direccion' => 'required|string|max:255',
        'pro_telefono' => 'required|string|max:255',
        'pro_correo' => 'required|string|max:255',
        'pro_cedula' => 'required|string|max:255',
        'pro_descripcion' => 'required|string|max:255',
        'pro_estado' => 'required|string|max:255'
    ];

    
}
