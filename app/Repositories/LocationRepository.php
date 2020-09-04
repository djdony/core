<?php

namespace App\Repositories;

use App\Models\Location;
use App\Repositories\BaseRepository;

/**
 * Class LocationRepository
 * @package App\Repositories
 * @version September 4, 2020, 2:40 pm UTC
*/

class LocationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'type',
        'code'
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
        return Location::class;
    }
}
