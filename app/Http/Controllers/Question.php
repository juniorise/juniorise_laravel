<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Question extends Controller
{
    public function index(){
        return view('screens.frontend.question.index');
    }
    public function show($category){
        return view('screens.frontend.question.show');
    }
}
