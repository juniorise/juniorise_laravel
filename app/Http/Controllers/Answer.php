<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Answer extends Controller
{
    public function show($id){
        return view('screens.frontend.answer.show');
    }
}
