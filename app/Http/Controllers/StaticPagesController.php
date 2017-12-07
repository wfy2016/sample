<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
    	return view('static_pages/home');
    	// return '主页';
    }

    public function help()
    {
        return view('static_pages/help');
    }

    public function about()
    {
    	return view('static_pages/about');
    }
}
