<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarioDetalle extends Model
{
    use HasFactory;
    public $table= 'inventario_det';
    protected $primaryKey="inv_id";
    public $timestamps=false;

    public $fillable=[
      'ive_id',
      'veh_id',
      'ivd_cantidad',
      'ivd_vu',
      'ivd_estado'
    ];
    protected $casts=[
      'ive_id'=>'integer',
      'veh_id'=>'integer',
      'ivd_cantidad'=>'integer',
      'ivd_vu'=>'float',
      'ivd_estado'=>'string'
    ];
}
