<?php

namespace App\Repositories;

use App\Models\Assigning;
use App\Repositories\BaseRepository;

/**
 * Class AssigningRepository
 * @package App\Repositories
 * @version May 24, 2020, 10:35 am UTC
*/

class AssigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'leavel_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
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
        return Assigning::class;
    }
}
