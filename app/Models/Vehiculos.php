<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Vehiculos
 * @package App\Models
 * @version January 26, 2023, 4:08 pm UTC
 *
 * @property \App\Models\Empresa $emp
 * @property integer $emp_id
 * @property string $veh_marca
 * @property string $veh_modelo
 * @property integer $veh_anio
 * @property number $veh_kilometraje
 * @property string $veh_subtipo
 * @property string $veh_color
 * @property string $veh_estado
 */
class Vehiculos extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'vehiculos';
    protected $primaryKey='veh_id';
    public $timestamps=false;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_id',
        'veh_marca',
        'veh_modelo',
        'veh_anio',
        'veh_kilometraje',
        'veh_subtipo',
        'veh_color',
        'veh_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'veh_id' => 'integer',
        'emp_id' => 'integer',
        'veh_marca' => 'string',
        'veh_modelo' => 'string',
        'veh_anio' => 'integer',
        'veh_kilometraje' => 'float',
        'veh_subtipo' => 'string',
        'veh_color' => 'string',
        'veh_estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'emp_id' => 'required',
        'veh_marca' => 'required|string|max:255',
        'veh_modelo' => 'required|string|max:255',
        'veh_anio' => 'required|integer',
        'veh_kilometraje' => 'required|numeric',
        'veh_subtipo' => 'required|string|max:255',
        'veh_color' => 'required|string|max:255',
        'veh_estado' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function emp()
    {
        return $this->belongsTo(\App\Models\Empresa::class, 'emp_id');
    }
}
