<?php

namespace App\Repositories;

use App\Models\Empresa;
use App\Repositories\BaseRepository;

/**
 * Class EmpresaRepository
 * @package App\Repositories
 * @version January 26, 2023, 4:31 pm UTC
*/

class EmpresaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'emp_nombre',
        'emp_ruc',
        'emp_telefono',
        'emp_direccion',
        'emp_correo'
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
        return Empresa::class;
    }
}
