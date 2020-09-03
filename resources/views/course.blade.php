@extends('layouts.app')
@section('title','All courses')
@section('content')
    <div class="wrap-all-course container py-5">
        <div class="filter row mb-3 px-3">
            <div class="filter-icon col-xl-1 d-flex align-items-center py-2 mr-2">
                <img src="{{ asset('storage/images/filter.png') }}" alt="Filter">
                <span class="filter-text ml-xl-1">Filter</span>
            </div>
            <div class="filter-search col-xl-4 d-flex justify-content-around align-items-center py-2">
                <form action="{{ Route('course.search') }}" method="GET">
                    <input type="text" class="text-search" placeholder="Search..." name="name" value="{{ request('name') }}">
                </form>
                <i class="fa fa-search"></i>
            </div>
        </div>
        <div class="course-all row">
            @foreach ($courses as $key => $item)
            <div class="left-course col-6 my-4">
                <div class="card">
                    <div class="card-body">
                        <div class="course-body d-flex ">
                            <img class="wrap-course-image ml-2" src="{{asset('storage/images/'. $item->image)}} " alt="HTML">
                            <div class="wrap-content col-xl-9 offset-1 pl-0">
                                <h5 class="card-title-course card-title">{{ $item->course_name }} </h5>
                                <p class="card-text-course card-text mb-0 text-justify">{{ $item->description }}</p>
                                <a href="{{ route('course.detail', $item->id) }}"
                                    class="card-link-more col-4 offset-8 d-block text-center py-xl-2 my-xl-3"
                                    {{ Auth::check() ? '' : 'data-toggle=modal data-target=#exampleModal' }}>More</a>
                                <input type="text" hidden value="{{ $item->id }}" class="idDirect">
                            </div>
                        </div>
                        <hr>
                        <div class="wrap-course-link row">
                            <div class="wrap-learners col-xl-4 text-center">
                                <a href="#" class="card-link mb-2 d-block">Learners</a>
                                <p class="mb-0">{{ $item->count_user }} </p>
                            </div>
                            <div class="wrap-lessons col-xl-4 text-center">
                                <a href="#" class="card-link mb-2 d-block">Lessons</a>
                                <p class="mb-0">{{ $item->count_lesson }} </p>
                            </div>
                            <div class="wrap-quizes col-xl-4 text-center">
                                <a href="#" class="card-link mb-2 d-block">Quizzes</a>
                                <p class="mb-0">1000</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="pagination col-12 mt-5 d-flex justify-content-end">
            {{ $courses->appends($_GET)->links() }}
        </div>
    </div>
@endsection
