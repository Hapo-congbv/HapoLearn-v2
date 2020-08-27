@extends('layouts.app')
@section('title','Lesson Detail')
@section('content')
    <div class="hapo-detail">
        <div class="container">
            <div class="row pt-5">
                <div class="col-7 p-0">
                    <div class="hapo-detail-course-header d-flex justify-content-center">
                        <img src="{{ asset('storage/images/'.$lesson->course_lesson->image) }} " alt="">
                    </div>
                    <div class="hapo-detail-content-left mt-3">
                        <nav class="hapo-nav-detail">
                            <div class="nav nav-tabs nav-fill hapo-nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="navLessonTab" data-toggle="tab" href="#navLesson" role="tab" aria-controls="nav-login" aria-selected="true">Description</a>
                                <a class="nav-item nav-link" id="navTeacherTab" data-toggle="tab" href="#navTeacher" role="tab" aria-controls="nav-register" aria-selected="false">Teachers</a>
                                <a class="nav-item nav-link" id="navProgramTab" data-toggle="tab" href="#navProgram" role="tab" aria-controls="nav-register" aria-selected="false">Program</a>
                                <a class="nav-item nav-link" id="navReviewTab" data-toggle="tab" href="#navReview" role="tab" aria-controls="nav-register" aria-selected="false">Review</a>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="navLesson" role="tabpanel" aria-labelledby="navLessonTab">
                                <div class="hapo-lesson-description px-3 mt-3">
                                        <h4 class="hapo-description-header">
                                            Descriptions Lesson
                                        </h4>
                                        <div class="hapo-lesson-contentdes">
                                            {{ $lesson->description }}
                                        </div>
                                </div>
                                <div class="hapo-lesson-requirement px-3 mt-3">
                                        <h4 class="hapo-requirement-header">
                                            Requirements
                                        </h4>
                                        <div class="hapo-lesson-requicontent">
                                            {{ $lesson->description }}
                                        </div>
                                </div>
                                <div class="hapo-tag px-3 mt-5 mb-3 d-flex">
                                       <div class="d-flex justify-content-center">
                                            <h4>Tag: </h4>
                                            @foreach ($lesson->course_lesson->tags as $tag)
                                                <span class="tag-item ml-3 d-block btn btn-light">{{ $tag->tag_name }}</span>
                                            @endforeach
                                       </div>
                                    </div>
                            </div>
                            <div class="tab-pane fade" id="navTeacher" role="tabpanel" aria-labelledby="navTeacherTab">
                                helooo
                            </div>
                            <div class="tab-pane fade" id="navProgram" role="tabpanel" aria-labelledby="navProgramTab">
                                helooo
                            </div>
                            <div class="tab-pane fade" id="navReview" role="tabpanel" aria-labelledby="navReviewTab">
                               review
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-4 course-info h-50 ml-5 w-100 px-0">
                    <div class="hapo-data-lesson-detail">
                        <div class="course-info-text">
                            <i class="fas fa-book"></i> Course: {{ $lesson->course->course_name }}
                        </div>
                        <div class="course-info-text">
                            <i class="fas fa-users"></i> Learners: {{ $lesson->count_user }}
                        </div>
                        <div class="course-info-text">
                            <i class="far fa-clock"></i> Times:  {{ $lesson->time_lesson }}
                        </div>
                        <div class="course-info-text">
                            <i class="fas fa-hashtag"></i> Tags: {{ $lesson->course_lesson->tag_course }}
                        </div>
                        <div class="course-info-text">
                            <i class="far fa-money-bill-alt"></i> Price: {{ number_format($lesson->price) }} $
                        </div>
                    </div>
                    <div class="mt-3 mb-5">
                        <div class="course-info-tittle d-flex justify-content-center align-items-center">Other Courses</div>
                        <div class="other-list">
                            @foreach ($otherCourses as $key => $other)
                                <div class="other-list-item py-3 row mx-0 ">
                                  <a href="{{ route('course.detail', $other->id) }}" class="col-10 no-gutters-custom"><strong>{{ ++$key }}.</strong> {{ $other->course_name }}.</a>
                                </div>
                            @endforeach
                            <div class="text-center p-4">
                                <a href=" {{ route('course.all') }}" class="btn btn-learn p-2 px-4">View all ours courses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
