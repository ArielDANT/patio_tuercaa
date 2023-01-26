<?php

namespace App\Repositories;

use App\Models\Clientes;
use App\Repositories\BaseRepository;

/**
 * Class ClientesRepository
 * @package App\Repositories
 * @version January 26, 2023, 5:27 pm UTC
*/

class ClientesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cli_nombres',
        'cli_apellidos',
        'cli_cedula',
        'cli_direccion',
        'cli_telefono',
        'cli_correo',
        'cli_estado'
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
        return Clientes::class;
    }
}
