<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function team()
    {
        return view('pages.team');
    }
    public function eror()
    {
        return view('pages.eror');
    }
}


