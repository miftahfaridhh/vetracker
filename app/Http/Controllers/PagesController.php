<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    // public function login()
    // {
    //     return view('auth.login');
    // }
}


