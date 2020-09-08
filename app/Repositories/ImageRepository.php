<?php

namespace App\Repositories;

use App\Models\Image;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version September 4, 2020, 11:03 am UTC
*/

class ImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'url',
        'imageable_id',
        'imageable_type',
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
