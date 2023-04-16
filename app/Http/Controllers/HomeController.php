<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    protected function AboutCourse()
    {
        return view('AboutCourse');
    }
    protected function Register()
    {
        return view('Register');
    }
}
