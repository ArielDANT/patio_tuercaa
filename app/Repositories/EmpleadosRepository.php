<?php

namespace App\Repositories;

use App\Models\Empleados;
use App\Repositories\BaseRepository;

/**
 * Class EmpleadosRepository
 * @package App\Repositories
 * @version January 24, 2023, 3:53 pm UTC
*/

class EmpleadosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'epl_nombres',
        'epl_apellidos',
        'epl_cedula',
        'epl_direccion',
        'epl_correo',
        'epl_estado'
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
        return Empleados::class;
    }
}
