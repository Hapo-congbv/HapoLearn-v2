<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;

class Lesson extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'lessons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['lesson_name', 'description', 'requirement', 'content', 'course_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function getCourseLessonAttribute()
    {
        return $this->course;
    }

    public function getCountUserLessonAttribute()
    {
        return $this->user()->count();
    }

    public function getTimeLessonAttribute()
    {
        return $this->lesson('time')->get();
    }
}
