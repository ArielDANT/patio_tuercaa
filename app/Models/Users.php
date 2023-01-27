<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Users
 * @package App\Models
 * @version January 27, 2023, 3:54 pm UTC
 *
 * @property \App\Models\Empleado $epl
 * @property string $usu_usuario
 * @property string $usu_perfil
 * @property integer $epl_id
 * @property string|\Carbon\Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 */
class Users extends Model
{
    //use SoftDeletes;

    use HasFactory;

    public $table = 'users';
    protected $primaryKey='id';
    public $timestamps=false;
    //const CREATED_AT = 'created_at';
    //const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'usu_usuario',
        'usu_perfil',
        'epl_id',
        'email_verified_at',
        'password',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'usu_usuario' => 'string',
        'usu_perfil' => 'string',
        'epl_id' => 'integer',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'usu_usuario' => 'required|string|max:255',
        'usu_perfil' => 'required|string|max:255',
        'epl_id' => 'required',
        'email_verified_at' => 'nullable',
        'password' => 'required|string|max:255',
        'remember_token' => 'nullable|string|max:100',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function epl()
    {
        return $this->belongsTo(\App\Models\Empleado::class, 'epl_id');
    }
}
