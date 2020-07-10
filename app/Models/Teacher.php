<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Teacher
 * @package App\Models
 * @version May 24, 2020, 10:42 am UTC
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $gender
 * @property string $email
 * @property string $phone
 * @property string $dob
 * @property string $address
 * @property string $nationality
 * @property string $passport
 * @property boolean $status
 * @property string $dateregistered
 * @property integer $user_id
 * @property string $image
 */
class Teacher extends Model
{
    use SoftDeletes;

    public $table = 'teachers';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];
    protected $primaryKey = 'teacher_id';



    public $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'phone',
        'dob',
        'address',
        'nationality',
        'passport',
        'status',
        'dateregistered',
        'user_id',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'first_name' => 'string',
        'last_name' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'phone' => 'string',
        'dob' => 'date',
        'address' => 'string',
        'nationality' => 'string',
        'passport' => 'string',
        'status' => 'boolean',
        'dateregistered' => 'date',
        'user_id' => 'integer',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'gender' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'dob' => 'required',
        'address' => 'required',
        'nationality' => 'required',
        'passport' => 'required',
        'status' => 'required',
        'dateregistered' => 'required',
        'user_id' => 'required'
    ];


}
