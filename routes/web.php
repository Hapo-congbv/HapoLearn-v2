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

Route::get('/course_all', 'User\CourseController@index')->name('course.all');

Route::post('/course_search', 'User\CourseController@search')->name('course.search');

Route::get('/course_detail/{id}', 'User\CourseController@show')->name('course.detail');

Route::get('/lesson_detail/{id}', 'User\LessonController@show')->name('lesson.detail');
