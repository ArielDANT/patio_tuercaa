<?php

namespace App\Repositories;

use App\Models\Proveedores;
use App\Repositories\BaseRepository;

/**
 * Class ProveedoresRepository
 * @package App\Repositories
 * @version January 26, 2023, 5:27 pm UTC
*/

class ProveedoresRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return Proveedores::class;
    }
}
