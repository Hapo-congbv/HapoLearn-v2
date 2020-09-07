<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Lesson;
use App\User;
use App\Models\Review;
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

    public function teacher()
    {
        return $this->belongsTo(User::class);
    }

    public function learner()
    {
        return $this->belongsToMany(User::class, 'course_users')->withPivot('id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'course_id')->whereNull('lesson_id');
    }

    public function tag()
    {
        return $this->belongsToMany(Tag::class, 'course_tags');
    }

    public function getCountUserAttribute()
    {
        return $this->learner()->count();
    }

    public function getCountLessonAttribute()
    {
        return $this->lesson()->count();
    }

    public function getTimeAttribute()
    {
        $allTime = $this->lesson()->sum('time');
        $timeFormatHours = floor($allTime / 60);
        $timeFormatMinutes = ceil($allTime - floor($allTime / 60) * 60);
        $timeFormat = [
            'hours' => $timeFormatHours,
            'minutes' => $timeFormatMinutes
        ];

        if ($timeFormat['hours'] == 0) {
            $time = "0 hours";
        } else {
            $time = $timeFormat['hours'] . " hours ";
        }
        return $time;
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

    public function getCourseReviewCountAttribute()
    {
        return $this->reviews->count();
    }

    public function getCourseAvgStarAttribute()
    {
        $avgStar = $this->reviews->avg('rating');
        return floor($avgStar);
    }

    public function getCourseRatingCount($star)
    {
        $query = $this->reviews->where('rating', $star)->count();
        return $query;
    }

    public function getCoursePrecentRating($star)
    {
        $query = $this->getCourseRatingCount($star);
        $allRatingCount = ($this->course_review_count) ?: 1;
        $percent = $query / $allRatingCount * 100;
        return $percent;
    }
}
