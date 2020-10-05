<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionOptionController extends Controller
{
    public function index()
    {
        $questionOptions = QuestionOption::all();

        return view('admin.questionOptions.index', compact('questionOptions'));
    }

    public function create()
    {
        $questions = Question::all()->pluck('question', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('questionOptions.create', compact('questions'));
    }

    public function store(StoreQuestionOptionRequest $request)
    {
        $questionOption = QuestionOption::create($request->all());
        return redirect()->route('question-options.index');
    }

    public function edit(QuestionOption $questionOption)
    {
        $questions = Question::all()->pluck('question', 'id');
        $questionOption->load('question');
        return view('admin.questionOptions.edit', compact('questions', 'questionOption'));
    }

    public function update(UpdateQuestionOptionRequest $request, QuestionOption $questionOption)
    {
        $questionOption->update($request->all());
        return redirect()->route('question-options.index');
    }

    public function show(QuestionOption $questionOption)
    {
        $questionOption->load('question');
        return view('questionOptions.show', compact('questionOption'));
    }

    public function destroy(QuestionOption $questionOption)
    {
        $questionOption->delete();
        return back();
    }
}
