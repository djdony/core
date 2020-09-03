<?php

namespace App\Repositories;

use App\Models\Faq;
use App\Repositories\BaseRepository;

/**
 * Class FaqRepository
 * @package App\Repositories
 * @version September 3, 2020, 4:03 pm UTC
*/

class FaqRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question',
        'answer',
        'type',
        'sort_order'
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
        return Faq::class;
    }
}
