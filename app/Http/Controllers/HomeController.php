<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use App\Staff;

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
        $email = $user->email;
        $type = $user->type;

        if($type === 'student') {
            return view('stud_status',compact('user'));
        }
        else if($type === 'staff'){

            $prof=Staff::where('email','=',$email)->get();
            $roles = json_decode($prof->role);

            return view('staff_status',compact('roles'));
        }
    }

    public function getData(Request $request){

        $user = \Auth::user();
        $email=$user->email;
        $type = $user->type;
        $role = $request->input('role');

        if($type==='student'){
            return NULL;
        }

        $prof=Staff::where('email','=',$email)->get();
        $roles = json_decode($prof->role);

        if (!in_array($role, $roles)) {
            return NULL;
        }

        if($role === 'superviser'){
            $student = $prof->students;            
            return view($view_for_staff,compact('student'));
        }

        else if($role === 'warden' || $role==='caretaker'){
            $hostel = $prof->hostel;
            $student=Student::where('hostel','=',$hostel)->get();
            return view($view_for_staff,compact('student'));
        }

        else if($role==='hod' || $role==='dept_lib_head'){
            $prof_dept=$prof->dept;
            $student=Student::where('dept','=',$prof_dept)->get();
            return view($view_for_staff,compact('student'));
        }
        
        //for other non-specific roles return whole database of students
        return view($view_for_staff,compact('student'));

    }
}
