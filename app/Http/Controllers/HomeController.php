<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $course = Course::orderBy('id', 'ASC')->limit(3)->get();
        $courseOld = Course::orderBy('id', 'DESC')->limit(3)->get();
        return view('index', compact('course', 'courseOld'));
    }
}
