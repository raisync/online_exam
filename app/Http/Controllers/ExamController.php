<?php

namespace OnlineExam\Http\Controllers;

use OnlineExam\Options;
use OnlineExam\Subjects;
use OnlineExam\Questions;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subjects = Subjects::WHERE('user_id', '=', auth()->user()->id)->get();
        $data = ['subjects' => $subjects];

        return view('admin', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subjects = new Subjects;
        $subjects->subject = $request->subject;
        $subjects->user_id = auth()->user()->id;
        $subjects->save();

        $questions = new Questions;
        $questions->subject_id = $subjects->id;
        $questions->question = $request->question;
        $questions->save();

        $options = new Options;
        $options->question_id = $questions->id;
        $options->option = $request->option;
        $options->save();

        return redirect(route('index'))->with('message','Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subjects = Subjects::find($id);
        $data = ['subjects' => $subjects];

        return view('view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subjects = Subjects::find($id);
        $data = ['subjects' => $subjects];

        return view('edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $subjects = Subjects::find($id);
        $subjects->subject = $request->subject;
        $subjects->user_id = auth()->user()->id;
        $subjects->save();

        return redirect(route('index'))->with('message','Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subjects::find($id)->delete();

        return redirect(route('index'))->with('message','Deleted Successfully!');
    }
}
