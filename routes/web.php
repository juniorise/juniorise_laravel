<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecentShare;
use App\Http\Controllers\Question;
use App\Http\Controllers\Answer;
use App\Http\Controllers\Errors;
use App\Http\Controllers\UserController;
use App\Models\User;

//Home
Route::get('/', function () {
    return view('screens/home/home');
});

Route::get('/errors', [Errors::class,'index'])->name('errors');

//Frontend
Route::prefix('/')->group(function () {
    Route::get('recentshare', [RecentShare::class,'index'])->name('recentshare')->middleware('auth');
    Route::post('recentshare',[RecentShare::class,'store']);
    Route::put('recentshare/{id}',[UserController::class,'update'])->name('profile.update');
    Route::get('recentshare/{category}',[RecentShare::class,'show'])->middleware('category_type','auth');
    Route::get('answers/{id}', [Answer::class,'show'])->name('answers')->middleware('auth');
    Route::post('answers/comment/{id}', [Answer::class,'store'])->name('answers.comment')->middleware('auth');
    Route::post('answers/like/post/{id}', [Answer::class,'likePost'])->name('answers.likePost')->middleware('auth');
    Route::post('answers/like/comment/{id}', [Answer::class,'likeComment'])->name('answers.likeComment')->middleware('auth');
});

//Backend
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('screens/admin/dashboard');
    });

    Route::get('/manage-post', function () {
        return view('screens/admin/managepost');
    });

    Route::get('/user-account/{uid}', function () {
        $users = User::all();
        $user = $users->firstWhere('id', request()->uid);
        if(isset($user)){
            return view('screens/admin/usersaccount', ['users' => $users, 'current_user' => $user]);
        } else
            return view('screens/admin/usersaccount', ['users' => $users]);
    });

    Route::get('/user-account', function () {
        return redirect('admin/user-account/1');
    });

    //TODO: search functionality not yet work.
    Route::any('/user-account/search', function () {
        $keyword = Input::get ('keyword');
        $users = User::where('email', 'like', '%'.$keyword.'%')
        ->orWhere('first_name', 'like', '%'.$keyword.'%')
        ->orWhere('last_name', 'like', '%'.$keyword.'%')
        ->orWhere('role', 'like', '%'.$keyword.'%')
        ->orWhere('major', 'like', '%'.$keyword.'%')
        ->orWhere('phone', 'like', '%'.$keyword.'%')
        ->orWhere('description', 'like', '%'.$keyword.'%')
        ->orWhere('reputation', 'like', '%'.$keyword.'%')
        ->orWhere('id', 'like', '%'.$keyword.'%')
        ->get();
        return view('screens/admin/usersaccount', ['users' => $users]);
    });

    Route::get('/query-select', function () {
        return view('screens/admin/queryselect');
    });
});

Auth::routes();

Route::resource('users','UserController');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
