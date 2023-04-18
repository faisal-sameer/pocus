<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    protected function DashboardCourse()
    {
        return view('DashboardCourse');
    }
    protected function CreateCourse()
    {
        return view('CreateCourse');
    }
}
