<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Inventario
 * @package App\Models
 * @version February 24, 2023, 5:37 pm UTC
 *
 * @property \App\Models\Proveedore $pro
 * @property \Illuminate\Database\Eloquent\Collection $vehiculos
 * @property integer $pro_id
 * @property string $ive_fecha
 * @property string $ive_documento
 * @property integer $ive_estado
 */
class Inventario extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'inventario';
    protected $primaryKey='ive_id';
    public $timestamps=false;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'pro_id',
        'ive_fecha',
        'ive_documento',
        'ive_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ive_id' => 'integer',
        'pro_id' => 'integer',
        'ive_fecha' => 'date',
        'ive_documento' => 'string',
        'ive_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pro_id' => 'required',
        'ive_fecha' => 'required',
        'ive_documento' => 'required|string|max:255',
        'ive_estado' => 'required|integer'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function pro()
    {
        return $this->belongsTo(\App\Models\Proveedore::class, 'pro_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function vehiculos()
    {
        return $this->belongsToMany(\App\Models\Vehiculo::class, 'inventario_det');
    }
}
