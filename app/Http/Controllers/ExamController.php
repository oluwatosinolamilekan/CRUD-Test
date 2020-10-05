<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        $exams = Exam::all();
        return view('exams.index', compact('exams'));
    }

    public function create()
    {
        $categories = Category::all()->pluck('name', 'id');
        return view('exams.create', compact('categories'));
    }

    public function store(StoreExamRequest $request)
    {
        $exam = Exam::create($request->all());
        $exam->categories()->sync($request->input('categories', []));
        return redirect()->route('exams.index');
    }

    public function edit(Exam $exam)
    {
        $categories = Category::all()->pluck('name', 'id');
        $exam->load('categories');
        return view('exams.edit', compact('categories', 'exam'));
    }

    public function update(UpdateExamRequest $request, Exam $exam)
    {
        $exam->update($request->all());
        $exam->categories()->sync($request->input('categories', []));
        return redirect()->route('exams.index');
    }

    public function show(Exam $exam)
    {
        $exam->load('categories');
        return view('exams.show', compact('exam'));
    }

    public function destroy(Exam $exam)
    {
        $exam->delete();
        return back();
    }
}
