<?php

use Illuminate\Support\Facades\Route;

//Thea
Route::get('/', function () {
    return view('screens/home/home');
});

//Panha
Route::prefix('/')->group(function () {
    Route::get('recentshare', function () {
        return view('screens/frontend/recentshare');
    });
    Route::get('answers', function () {
        return view('screens/frontend/answers');
    });
    Route::get('questions', function () {
        return view('screens/frontend/questions');
    });
});

//Lyhean
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('screens/admin/dashboard');
    });
    Route::get('/managepost', function () {
        return view('screens/admin/managepost');
    });
    Route::get('/usersaccount', function () {
        return view('screens/admin/usersaccount');
    });
    Route::get('/queryselect', function () {
        return view('screens/admin/queryselect');
    });
});