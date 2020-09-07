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
})->name('wellcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// course
Route::get('/course-all', 'User\CourseController@index')->name('course.all');

Route::get('/course-search', 'User\CourseController@search')->name('course.search');

Route::get('/course-detail/{id}', 'User\CourseController@show')->name('course.detail');

Route::post('/take-user-course', 'User\CourseUserController@store')->name('course.user.store');

Route::get('/leave-user-course/{id}', 'User\CourseUserController@destroy')->name('course.user.destroy');

Route::post('course/review', 'User\CourseController@store')->name('review.store.course');

Route::get('/course/review/{id}', 'User\CourseController@destroy')->name('review.destroy.course');

Route::post('/course/review/{id}', 'User\CourseController@update')->name('review.update.course');

//lesson
Route::get('/lesson-detail/{id}', 'User\LessonController@show')->name('lesson.detail');

Route::post('/take-user-lesson', 'User\LessonUserController@store')->name('lesson.user.store');

Route::get('/leave-user-lesson/{id}/{idCourse}', 'User\LessonUserController@destroy')->name('lesson.user.destroy');

Route::post('/lesson/review', 'User\LessonController@store')->name('review.store.lesson');

Route::get('/lesson/review/{id}', 'User\LessonController@destroy')->name('review.destroy.lessson');

Route::post('/lesson/review/{id}', 'User\LessonController@update')->name('review.update.lesson');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('index');
    Route::resource('users', 'Admin\UserController');
    Route::resource('courses', 'Admin\CourseController');
});
