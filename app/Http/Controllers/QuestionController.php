<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\QuestionCategory;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('options')->get();
        return view('questions.index');
    }

    public function create()
    {
        $categories = QuestionCategory::all()->pluck('name', 'id');
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $question = Question::create($request->all());

        foreach ($request->input('option_text') as $index => $optionText) {
            $question->options()->create([
                'option_text' => $optionText,
                'is_correct'  => $request->input('is_correct.' . $index)
            ]);
        }
        return redirect()->route('questions.index');
    }

    public function edit(Question $question)
    {
        $categories = Category::all()->pluck('name', 'id');
        $question->load('category');
        return view('questions.edit', compact('categories', 'question'));
    }

    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question->update($request->all());

        return redirect()->route('questions.index');
    }

    public function destroy(Question $question)
    {
        $question->delete();
        return back();
    }
}
