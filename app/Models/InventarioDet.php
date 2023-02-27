<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class InventarioDet
 * @package App\Models
 * @version February 24, 2023, 5:37 pm UTC
 *
 * @property \App\Models\Inventario $ive
 * @property \App\Models\Vehiculo $veh
 * @property integer $ive_id
 * @property integer $veh_id
 * @property integer $ivd_cantidad
 * @property number $ivd_vu
 * @property string $ivd_estado
 */
class InventarioDet extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'inventario_det';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'ive_id',
        'veh_id',
        'ivd_cantidad',
        'ivd_vu',
        'ivd_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ivd_id' => 'integer',
        'ive_id' => 'integer',
        'veh_id' => 'integer',
        'ivd_cantidad' => 'integer',
        'ivd_vu' => 'float',
        'ivd_estado' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ive_id' => 'required',
        'veh_id' => 'required',
        'ivd_cantidad' => 'required|integer',
        'ivd_vu' => 'required|numeric',
        'ivd_estado' => 'required|string|max:255'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function ive()
    {
        return $this->belongsTo(\App\Models\Inventario::class, 'ive_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function veh()
    {
        return $this->belongsTo(\App\Models\Vehiculo::class, 'veh_id');
    }
}
