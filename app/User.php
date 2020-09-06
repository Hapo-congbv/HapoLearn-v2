<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Lesson;
use App\Models\CourseUser;

class User extends Authenticatable
{
    use Notifiable;

    const ROLE = [
        'user' => 1,
        'teacher' => 2,
    ];

    const ROLE_LABEL = [
        'user' => 'User',
        'teacher' => 'Teacher',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'email_verified_at', 'password', 'birth_day', 'address', 'phone', 'avatar', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courseUser()
    {
        return $this->hasMany(CourseUser::class);
    }

    public function getIsTeacherAttribute()
    {
        return $this->role_if == self::ROLE['teacher'];
    }

    public function getRoleLabelAttribute()
    {
        return self::ROLE_LABEL[array_flip(self::ROLE)[$this->role_id]];
    }
}
