<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecentShare;
use App\Http\Controllers\Question;
use App\Http\Controllers\Answer;
use App\Http\Controllers\Errors;

//Thea
Route::get('/', function () {
    return view('screens/home/home');
});

Route::get('/errors', [Errors::class,'index'])->name('errors');

//Panha
Route::prefix('/')->group(function () {
    Route::get('recentshare', [RecentShare::class,'index'])->name('recentshare')->middleware('auth');
    Route::post('recentshare',[RecentShare::class,'store']);
    Route::get('recentshare/{category}',[RecentShare::class,'show'])->middleware('category_type','auth');
    Route::get('answers/{id}', [Answer::class,'show'])->name('answers')->middleware('auth');
    Route::post('answers/comment/{id}', [Answer::class,'store'])->name('answers.comment')->middleware('auth');
    Route::post('answers/like/{id}', [Answer::class,'like'])->name('answers.like')->middleware('auth');
    Route::get('questions', [Question::class, 'index'])->name('questions')->middleware('auth');
    Route::get('questions/{category}', [Question::class, 'show'])->middleware('category_type','auth');
});

//Lyhean
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('screens/admin/dashboard');
    });
    Route::get('/manage-post', function () {
        return view('screens/admin/managepost');
    });
    Route::get('/user-account', function () {
        return view('screens/admin/usersaccount');
    });
    Route::get('/query-select', function () {
        return view('screens/admin/queryselect');
    });
});

Route::get('/on', 'YourController@callMeDirectlyFromUrl');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
