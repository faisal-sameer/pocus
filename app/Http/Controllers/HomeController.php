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
    protected function Login()
    {
        return view('Login');
    }
    protected function DashboardCourse()
    {
        return view('DashboardCourse');
    }
}
