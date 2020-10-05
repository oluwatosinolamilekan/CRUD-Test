<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionCategory;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class QuestionCategoryController extends Controller
{
    public function index()
    {
        $categories = QuestionCategory::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $category = Category::create($request->all());
        return redirect()->route('categories.index');
    }

    public function edit(QuestionCategory $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, QuestionCategory $category)
    {
        $category->update($request->all());
        return redirect()->route('categories.index');
    }

    public function show(QuestionCategory $category)
    {
        return view('admin.categories.show', compact('category'));
    }

    public function destroy(QuestionCategory $category)
    {
        $category->delete();
        return back();
    }
}
