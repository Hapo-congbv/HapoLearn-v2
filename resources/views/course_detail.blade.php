@extends('layouts.app')
@section('title','Course Detail')
@section('content')
    <div class="hapo-detail">
        <div class="container">
            <div class="row pt-5">
                <div class="col-7 p-0">
                    <div class="hapo-detail-course-header d-flex justify-content-center">
                        <img src="{{ asset('storage/images/'.$course->image) }} " alt="">
                    </div>
                    <div class="hapo-detail-content-left mt-3">
                        <nav class="hapo-nav-detail">
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="navLessonTab" data-toggle="tab" href="#navLesson" role="tab" aria-controls="nav-login" aria-selected="true">Lesson</a>
                                <a class="nav-item nav-link" id="navTeacherTab" data-toggle="tab" href="#navTeacher" role="tab" aria-controls="nav-register" aria-selected="false">Teacher</a>
                                <a class="nav-item nav-link" id="navReviewTab" data-toggle="tab" href="#navReview" role="tab" aria-controls="nav-register" aria-selected="false">Review</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="navLesson" role="tabpanel" aria-labelledby="navLessonTab">
                                <div class="hapo-header-filter d-flex align-items-center my-3 mx-3">
                                    <div class="hapo-filter d-flex justify-content-center align-items-center">
                                        <img alt="" src="{{ asset('storage/images/filter.png') }} ">
                                        <p>Filter</p>
                                    </div>
                                    <div class="hapo-header-form d-flex flex-row">
                                        <input type="text" class="hapo-search" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                                        <a class="fa fa-search" href=""></a>
                                    </div>
                                </div>
                                <div class="course-lesson-detail" >
                                    <table class="table">
                                        <tbody id="myTable">
                                            @if (count($lessonCourse) > 0)
                                                @foreach ($lessonCourse as $key => $item)
                                                    <tr>
                                                        <td class="text-justify d-flex justify-content-between">
                                                            <p class="course-other-item">{{ ++$key . ".  " . $item->lesson_name }}.</p>
                                                            <a href="{{ route('lesson.detail',$item->id) }}" class="course-other-item-button px-3 py-2 btn-learn">Learn</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td class="text-center"> "Not found lesson !!!"</td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                    <div class="pagination col-12 mt-5 d-flex justify-content-end mt-4 ">
                                        {{ $lessonCourse->links() }}
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navTeacher" role="tabpanel" aria-labelledby="navTeacherTab">
                                helooo
                            </div>
                            <div class="tab-pane fade" id="navReview" role="tabpanel" aria-labelledby="navReviewTab">
                               review
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 course-info h-50 ml-5 w-100 px-0">
                    <div class="hapo-description mb-3 overflow-hidden">
                       <div class="p-3">
                            <div class="hapo-description-header">Description course</div>
                            <hr>
                            <div class="hapo-description-body">
                                <p class="text-justify">
                                    {{ $course->description }}
                                </p>
                            </div>
                       </div>
                    </div>
                    <div class="hapo-data-lesson-detail">
                        <div class="course-info-text">
                            <i class="fas fa-users"></i> Learners: {{ $course->count_user }}
                        </div>
                        <div class="course-info-text">
                            <i class="far fa-list-alt"></i> Lessons: {{ $course->count_lesson }} lessons
                        </div>
                        <div class="course-info-text">
                            <i class="far fa-clock"></i> Times: {{ $course->time }}
                        </div>
                        <div class="course-info-text">
                            <i class="fas fa-hashtag"></i> Tags: {{ $course->tag_course }}
                        </div>
                        <div class="course-info-text">
                            <i class="far fa-money-bill-alt"></i> Price: {{ number_format($course->price) }} $
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
