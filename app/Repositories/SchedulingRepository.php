<?php

namespace App\Repositories;

use App\Models\Scheduling;
use App\Repositories\BaseRepository;

/**
 * Class SchedulingRepository
 * @package App\Repositories
 * @version May 24, 2020, 10:36 am UTC
*/

class SchedulingRepository extends BaseRepository
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
        'time_id',
        'teacher_id',
        'semester_id',
        'start_time',
        'end_time',
        'status'
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
        return Scheduling::class;
    }
}
