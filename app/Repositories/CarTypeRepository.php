<?php

namespace App\Repositories;

use App\Models\CarType;
use App\Repositories\BaseRepository;

/**
 * Class CarTypeRepository
 * @package App\Repositories
 * @version September 4, 2020, 10:44 am UTC
*/

class CarTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return CarType::class;
    }
}
