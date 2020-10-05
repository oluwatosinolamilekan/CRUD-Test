<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuestionCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('partials.login');
})->name('login');

Route::post('login', [LoginController::class, 'authenticate'])->name('login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::prefix('admin')->group(function () {
    Route::prefix('questions')->group(function () {
        Route::get('index', [QuestionController::class, 'index'])->name('question.index');
        Route::get('create', [QuestionController::class, 'create'])->name('question.create');
        Route::post('store', [QuestionController::class, 'store'])->name('question.store');
        Route::get('edit/{id}', [QuestionController::class, 'edit'])->name('question.edit');
        Route::put('update/{id}', [QuestionController::class, 'update'])->name('question.update');
        Route::delete('delete/{id}', [QuestionController::class, 'delete'])->name('question.destroy');
    });

    Route::prefix('exams')->group(function () {
        Route::get('index', [ExamController::class, 'index'])->name('exam.index');
        Route::get('create', [ExamController::class, 'create'])->name('exam.create');
        Route::post('store', [ExamController::class, 'store'])->name('exam.store');
        Route::get('edit/{id}', [ExamController::class, 'edit'])->name('exam.edit');
        Route::put('update/{id}', [ExamController::class, 'update'])->name('exam.update');
        Route::delete('delete/{id}', [ExamController::class, 'delete'])->name('exam.destroy');
    });

    Route::prefix('categories')->group(function () {
        Route::get('index', [QuestionCategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [QuestionCategoryController::class, 'create'])->name('categories.create');
        Route::post('store', [QuestionCategoryController::class, 'store'])->name('categories.store');
        Route::get('edit/{id}', [QuestionCategoryController::class, 'edit'])->name('categories.edit');
        Route::put('update/{id}', [QuestionCategoryController::class, 'update'])->name('categories.update');
        Route::delete('delete/{id}', [QuestionCategoryController::class, 'delete'])->name('categories.destroy');
    });

    Route::prefix('question-options')->group(function () {
        Route::get('index', [QuestionCategoryController::class, 'index'])->name('question-option.index');
        Route::get('create', [QuestionCategoryController::class, 'create'])->name('question-option.create');
        Route::post('store', [QuestionCategoryController::class, 'store'])->name('question-option.store');
        Route::get('edit/{id}', [QuestionCategoryController::class, 'edit'])->name('question-option.edit');
        Route::put('update/{id}', [QuestionCategoryController::class, 'update'])->name('question-option.update');
        Route::delete('delete/{id}', [QuestionCategoryController::class, 'delete'])->name('question-option.destroy');
    });
});
