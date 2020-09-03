<?php

namespace App\Repositories;

use App\Models\Setting;
use App\Repositories\BaseRepository;

/**
 * Class SettingRepository
 * @package App\Repositories
 * @version September 3, 2020, 10:30 am UTC
*/

class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'about',
        'service_title',
        'services',
        'contact_title',
        'address',
        'email',
        'phone'
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
        return Setting::class;
    }
}
