<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function status(){
        $user = \Auth::user();
        $student=Student::all();
        //view for students
        $view_for_student='';
        //view for staff
        $view_for_staff='';
        if($user->role === 'student') {
            //passing the user which is a student
            return view($view_for_student,compact('user'));
            //return $user;

        }
        else if($user->role==='supervisor'){
            $prof_mail=$user->email;
            //this prof is from staff table (previous one is from "user")
            $prof=Staff::where('email','=',$prof_mail)->get();
            //in model 'Staff' implement 'guide_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=$prof->guide_student();
            return view($view_for_staff,compact('student'));
        }
        else if($user->role==='warden'){
            $prof_mail=$user->email;
            //this prof is from staff table (previous one is from "user")
            $prof=Staff::where('email','=',$prof_mail)->get();
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=$prof->hostel_student();
            return view($view_for_staff,compact('student'));
        }
        else if($user->role==='caretaker'){
            $prof_mail=$user->email;
            //this prof is from staff table (previous one is from "user")
            $prof=Staff::where('email','=',$prof_mail)->get();
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=$prof->hostel_student();
            return view($view_for_staff,compact('student'));
        }
        else if($user->role==='hod' || $user->role==='dept_lib_head'){
            $prof_mail=$user->email;
            //this prof is from staff table (previous one is from "user")
            $prof=Staff::where('email','=',$prof_mail)->get();
            $prof_dept=$prof->dept;
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=Student::where('dept','=',$prof_dept)->get();
            return view($view_for_staff,compact('student'));
        }
        //for others "cc,library,F&A,registrar,workshop.student Affairs"
        //  return view($view_for_staff,compact('student'));
    }
}
