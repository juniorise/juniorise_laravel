<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecentShare extends Controller
{
    public function index(){
        return view('screens.frontend.recentshare.index');
    }

    public function show($category){
        return view('screens.frontend.recentshare.show');
    }
}
