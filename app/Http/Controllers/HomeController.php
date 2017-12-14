<?php

namespace OnlineExam\Http\Controllers;

use OnlineExam\Options;
use OnlineExam\Subjects;
use OnlineExam\Questions;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function admin() {
        return view('admin');
    }

    public function student() {
        $subjects = Subjects::all();
        $data = ['subjects' => $subjects];

        return view('student', $data);
    }

    public function exam() {
        return view('exam');
    }
}
