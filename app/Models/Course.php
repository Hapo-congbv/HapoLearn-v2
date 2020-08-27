<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\User;
use App\Models\Tag;

class Course extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'courses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['course_name', 'description', 'image', 'price', 'time', 'quizze', 'teacher_id'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    public function lesson()
    {
        return $this->hasMany(Lesson::class, 'course_id');
    }

    public function user()
    {
        return $this->belongsToMany(User::class, 'course_users');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'course_tags');
    }

    public function getCountUserAttribute()
    {
        return $this->user()->count();
    }

    public function getCountLessonAttribute()
    {
        return $this->lesson()->count();
    }

    public function getTimeAttribute()
    {
        return $this->lesson()->sum('time');
    }

    public function getTagsAttribute()
    {
        return $this->tag;
    }

    public function getTagCourseAttribute()
    {
        $tagArr = $this->tag;
        if (count($tagArr)) {
            $tagString = $tagArr->first()->tag_name;

            for ($i = 1; $i < count($tagArr); $i++) {
                $tagString .= ", " . $tagArr[$i]->tag_name;
            }
        } else {
            $tagString = "";
        }

        return $tagString;
    }
}
