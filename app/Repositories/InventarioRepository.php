<?php

namespace App\Repositories;

use App\Models\Inventario;
use App\Repositories\BaseRepository;

/**
 * Class InventarioRepository
 * @package App\Repositories
 * @version February 24, 2023, 5:37 pm UTC
*/

class InventarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'pro_id',
        'ive_fecha',
        'ive_documento',
        'ive_estado'
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
        return Inventario::class;
    }
}
