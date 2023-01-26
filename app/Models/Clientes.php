<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Clientes
 * @package App\Models
 * @version January 26, 2023, 5:27 pm UTC
 *
 * @property string $cli_nombres
 * @property string $cli_apellidos
 * @property string $cli_cedula
 * @property string $cli_direccion
 * @property string $cli_telefono
 * @property string $cli_correo
 * @property string $cli_estado
 */
class Clientes extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'clientes';
    protected $primaryKey='cli_id';
    public $timestamps=false;
    
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'cli_nombres',
        'cli_apellidos',
        'cli_cedula',
        'cli_direccion',
        'cli_telefono',
        'cli_correo',
        'cli_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'cli_id' => 'integer',
        'cli_nombres' => 'string',
        'cli_apellidos' => 'string',
        'cli_cedula' => 'string',
        'cli_direccion' => 'string',
        'cli_telefono' => 'string',
        'cli_correo' => 'string',
        'cli_estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cli_nombres' => 'required|string|max:255',
        'cli_apellidos' => 'required|string|max:255',
        'cli_cedula' => 'required|string|max:255',
        'cli_direccion' => 'required|string|max:255',
        'cli_telefono' => 'required|string|max:255',
        'cli_correo' => 'required|string|max:255',
        'cli_estado' => 'required|string|max:255'
    ];

    
}
