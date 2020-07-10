
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('classes', 'ClassesController');

Route::resource('classrooms', 'ClassroomController');

Route::resource('leavels', 'LeavelController');

Route::resource('batches', 'BatchController');

Route::resource('shifts', 'ShiftController');


Route::resource('courses', 'CourseController');

Route::resource('faculties', 'FacultyController');

Route::resource('times', 'TimeController');

Route::resource('academics', 'AcademicController');

Route::resource('attendances', 'AttendanceController');

Route::resource('days', 'DayController');

Route::resource('assignings', 'AssigningController');

Route::resource('schedulings', 'SchedulingController');

Route::resource('transactions', 'TransactionController');

Route::resource('admissions', 'AdmissionController');

Route::resource('teachers', 'TeacherController');

Route::resource('roles', 'RoleController');

Route::resource('users', 'UserController');