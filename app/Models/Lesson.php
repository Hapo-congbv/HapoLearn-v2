<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\Review;

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

    public function userLesson()
    {
        return $this->hasMany(UserLesson::class);
    }

    public function lessonReviews()
    {
        return $this->hasMany(Review::class, 'lesson_id');
    }

    public function getCountUserLessonAttribute()
    {
        return $this->userLesson()->count();
    }

    public function getTimeLessonAttribute()
    {
        $timeFormatHours = floor($this->time / 60);
        $timeFormatMinutes = ceil($this->time - floor($this->time / 60) * 60);
        $timeFormat = [
            'hours' => $timeFormatHours,
            'minutes' => $timeFormatMinutes
        ];

        if ($timeFormat['hours'] == 0) {
            $time = $timeFormat['minutes'] . " minutes";
        } else {
            $time = $timeFormat['hours'] . " hours " . $timeFormat['minutes'] . " minutes";
        }
        return $time;
    }

    public function getLessonReviewCountAttribute()
    {
        return $this->lessonReviews->count();
    }

    public function getLessonAvgStarAttribute()
    {
        $avgStar = $this->lessonReviews->avg('rating');
        return floor($avgStar);
    }

    public function getLessonRatingCount($star)
    {
        $query = $this->lessonReviews->where('rating', $star)->count();
        return $query;
    }

    public function getLessonPrecentRating($star)
    {
        $query = $this->getLessonRatingCount($star);
        $allRatingCount = ($this->lesson_review_count) ?: 1;
        $percent = $query / $allRatingCount * 100;
        return $percent;
    }

    public function lessonLearner()
    {
        return $this->belongsToMany(User::class, 'lesson_users')->withPivot('id');
    }
}
