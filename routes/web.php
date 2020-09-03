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

Route::get('/course-all', 'User\CourseController@index')->name('course.all');

Route::get('/course-search', 'User\CourseController@search')->name('course.search');

Route::get('/course-detail/{id}', 'User\CourseController@show')->name('course.detail');

Route::get('/lesson-detail/{id}', 'User\LessonController@show')->name('lesson.detail');

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('index');
    Route::resource('users', 'Admin\UserController');
    Route::resource('courses', 'Admin\CourseController');
});
