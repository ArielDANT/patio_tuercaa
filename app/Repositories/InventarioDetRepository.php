<?php

namespace App\Repositories;

use App\Models\InventarioDet;
use App\Repositories\BaseRepository;

/**
 * Class InventarioDetRepository
 * @package App\Repositories
 * @version February 24, 2023, 5:37 pm UTC
*/

class InventarioDetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ive_id',
        'veh_id',
        'ivd_cantidad',
        'ivd_vu',
        'ivd_estado'
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
        return InventarioDet::class;
    }
}
