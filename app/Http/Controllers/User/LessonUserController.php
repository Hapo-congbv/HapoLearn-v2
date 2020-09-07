<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\UserLesson;
use Illuminate\Http\Request;

class LessonUserController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lessonUser = $request->all();
        $lessonId = $lessonUser['lesson_id'] = $request->lesson_id;
        UserLesson::create($lessonUser);
        return redirect()->route('lesson.detail', $lessonId);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $idCourse)
    {
        $userCourse = UserLesson::findOrfail($id);
        $userCourse->delete();
        return redirect()->route('course.detail', $idCourse);
    }
}
