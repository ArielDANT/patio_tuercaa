<?php

namespace App\Repositories;

use App\Models\Vehiculos;
use App\Repositories\BaseRepository;

/**
 * Class VehiculosRepository
 * @package App\Repositories
 * @version January 26, 2023, 4:08 pm UTC
*/

class VehiculosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehiculos::class;
    }
}
