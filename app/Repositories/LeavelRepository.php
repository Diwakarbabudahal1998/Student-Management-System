<?php

namespace App\Repositories;

use App\Models\Leavel;
use App\Repositories\BaseRepository;

/**
 * Class LeavelRepository
 * @package App\Repositories
 * @version May 23, 2020, 5:12 pm UTC
*/

class LeavelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'leavel',
        'course_id',
        'leavel_description'
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
        return Leavel::class;
    }
}
