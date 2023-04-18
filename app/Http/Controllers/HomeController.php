<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\course;
use App\models\student;
use Alert;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{

    protected function Home()
    {
        $courses = course::where(['Status' => 1])->get();
        $all = ['courses' => $courses];
        return view('Home')->with('all', $all);
    }
    protected function AboutCourse($id)
    {
        $course = course::where(['id' => $id, 'Status' => 1])->whereHas('students', function ($q) use ($id) {
            $q->where('course_id', $id);
        })->first();
        if ($course == null) {
            Alert::warning('لا توجد الدورة ');
            return  redirect()->route('Home');
        }
        if ($course) {
            $studentCount = $course->students->count();
            // do something with the student count
        }
        return view('AboutCourse')->with('course', $course);
    }
    protected function Register()
    {
        $courses = course::where(['Status' => 1])->select('id', 'title_en')->get();

        return view('Register')->with('courses', $courses);
    }
    protected function signToCourse(Request $request)
    {

        $user = User::where('email', $request->Email)->first();
        $course = course::where('id', $request->course)->first();

        if ($user == null) {
            $user = new User();
            $user->name = $request->Name;
            $user->email = $request->Email;
            $user->password = Hash::make(12345);
            $user->permission_id = 3;
            $user->Status = 2;
            $user->save();
        }
        $HaveReg = student::where(['course_id' => $request->course, 'user_id' => $user->id, 'Status' => 1])->first();

        if ($HaveReg == null) {

            $No = student::where('course_id', $request->course)->count();
            $student = new student();
            $student->user_id = $user->id;
            $student->course_id = $request->course;
            $student->phone = $request->phone;
            $student->No = $No + 1;
            $student->save();
        } else {

            Alert::warning('You already Registered to This Course : ' . $course->title_en);

            return  redirect()->route('Register');
        }



        Alert::success('You Have Register To Course :  ' . $course->title_en);
        return  redirect()->route('Home');
    }
    protected function Login()
    {
        return view('Login');
    }
}
