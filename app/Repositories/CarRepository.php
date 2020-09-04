<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version September 4, 2020, 11:03 am UTC
*/

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'car_type_id',
        'max_pax',
        'max_luggage',
        'description'
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
        return Car::class;
    }
}
