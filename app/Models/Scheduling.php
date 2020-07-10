<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Scheduling
 * @package App\Models
 * @version May 24, 2020, 10:36 am UTC
 *
 * @property integer $course_id
 * @property integer $leavel_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
 * @property integer $teacher_id
 * @property integer $semester_id
 * @property time $start_time
 * @property time $end_time
 * @property boolean $status
 */
class Scheduling extends Model
{
    use SoftDeletes;

    public $table = 'schedulings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'scheduling_id';



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'schedule_id' => 'integer',
        'course_id' => 'integer',
        'leavel_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer',
        'teacher_id' => 'integer',
        'semester_id' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'course_id' => 'required',
        'leavel_id' => 'required',
        'shift_id' => 'required',
        'classroom_id' => 'required',
        'batch_id' => 'required',
        'day_id' => 'required',
        'time_id' => 'required',
        'teacher_id' => 'required',
        'semester_id' => 'required',
        'start_time' => 'required',
        'end_time' => 'required',
        'status' => 'required'
    ];


}
