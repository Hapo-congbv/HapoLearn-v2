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
                                <h4 class="hapo-teacher-header mt-2 p-3">
                                    Main Teachers
                                </h4>
                                @for ($i = 0; $i < 3; $i++)
                                <div class="hapo-teacher-body d-flex align-items-center ml-2 mt-4 p-3">
                                     <div class="hapo-teacher-image">
                                         <img src="{{ asset('storage/images/teacher.png') }} " alt="">
                                     </div>
                                     <div class="hapo-teacher-content ml-3 d-flex flex-column ">
                                         <span class="hapo-teacher-name">Luu trung nghia</span>
                                         <span class="hapo-teacher-experience">Second Year Teacher</span>
                                         <span class="hapo-teacher-contact mt-2">
                                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-slack"></i></a>
                                         </span>
                                     </div>
                                 </div>
                                 <div class="hapo-teacher-description  p-3">
                                     <p class="text-justify">
                                         Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.
                                         Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum,
                                         venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique
                                     </p>
                                 </div>
                                 <hr>
                                @endfor
                            </div>
                            <div class="tab-pane fade" id="navReview" role="tabpanel" aria-labelledby="navReviewTab">
                               <div class="px-3">
                                    <h4 class="hapo-review-header mt-2 px-3">
                                        05 Reviews
                                    </h4>
                                    <hr>
                                    <div class="hapo-review-body p-3 d-flex">
                                        <div class="hapo-review-bodyleft d-flex justify-content-center align-items-center flex-column">
                                        <p class="hapo-review-star m-0">5</p>
                                        <span>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                            <p class="hapo-review-rating">2 Ratings</p>
                                        </div>
                                        <div class="hapo-review-bodyright ml-4">
                                        <div class="mt-2 d-flex align-items-center justify-content-between px-3 ">
                                                <div class="pr-0">5 start</div>
                                                <div class="progress w-75">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="">2</div>
                                        </div>
                                        <div class="mt-2 d-flex align-items-center justify-content-between px-3 ">
                                                <div class="pr-0">4 start</div>
                                                <div class="progress w-75">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="">2</div>
                                            </div>
                                            <div class="mt-2 d-flex align-items-center justify-content-between px-3 ">
                                                <div class="pr-0">3 start</div>
                                                <div class="progress w-75">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="">2</div>
                                            </div>
                                            <div class="mt-2 d-flex align-items-center justify-content-between px-3 ">
                                                <div class="pr-0">2 start</div>
                                                <div class="progress w-75">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="">2</div>
                                            </div>
                                            <div class="mt-2 d-flex align-items-center justify-content-between px-3 ">
                                                <div class="pr-0">1 start</div>
                                                <div class="progress w-75">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="">2</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="hapo-review-content">
                                        <div class="hapo-review-showall">Show all review <i class="fas fa-sort-down"></i></div>
                                        <div class="hapo-review-user">
                                            <div class="hapo-review-content-header d-flex justify-content-start align-items-center mt-5">
                                                <div class="hapo-review-content-avatar mr-3">
                                                    <img class="rounded-circle" src="{{ asset('storage/images/user.png') }} " alt="">
                                                </div>
                                                <div class="hapo-review-content-username mr-3">
                                                    <p class="m-0 p-0">Nam hoang</p>
                                                </div>
                                                <div class="hapo-review-content-rating mr-3">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="hapo-review-content-time">
                                                    <p class="m-0 p-0">August 4, 2020 at 1:30 pm</p>
                                                </div>
                                            </div>
                                            <div class="hapo-review-content-body">
                                                <p class="text-justify">
                                                    Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                                                    Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique
                                                </p>
                                            </div>
                                            <div class="hapo-review-footer">
                                                <a href="#" class="course-other-item-button px-3 py-2 btn-learn hapo-review-reply">Reply</a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                               </div>
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
