<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Leavel
 * @package App\Models
 * @version May 23, 2020, 5:12 pm UTC
 *
 * @property string $leavel
 * @property integer $course_id
 * @property string $leavel_description
 */
class Leavel extends Model
{
    use SoftDeletes;

    public $table = 'leavels';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'leavel_id';



    public $fillable = [
        'leavel',
        'course_id',
        'leavel_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'leavel_id' => 'integer',
        'leavel' => 'string',
        'course_id' => 'integer',
        'leavel_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'leavel' => 'required',
        'course_id' => 'required',
        'leavel_description' => 'required'
    ];


}
