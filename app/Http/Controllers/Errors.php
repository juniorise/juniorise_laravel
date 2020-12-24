<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Errors extends Controller
{
    public function index(){
        return view('screens.errors.page_not_found');
    }
}
