<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assigning
 * @package App\Models
 * @version May 24, 2020, 10:35 am UTC
 *
 * @property integer $course_id
 * @property integer $leavel_id
 * @property integer $shift_id
 * @property integer $classroom_id
 * @property integer $batch_id
 * @property integer $day_id
 * @property integer $time_id
 */
class Assigning extends Model
{
    use SoftDeletes;

    public $table = 'assignings';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'assigning_id';



    public $fillable = [
        'course_id',
        'leavel_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'class_assign_id' => 'integer',
        'course_id' => 'integer',
        'leavel_id' => 'integer',
        'shift_id' => 'integer',
        'classroom_id' => 'integer',
        'batch_id' => 'integer',
        'day_id' => 'integer',
        'time_id' => 'integer'
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
        'time_id' => 'required'
    ];


}
