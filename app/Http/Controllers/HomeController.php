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
        $email=$user->email;
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

        $students = Student::all();

        if($role === 'superviser'){
            $prof=Staff::where('email','=',$email)->get();
            $selection = collect();
            foreach($students as $student){
                if($student->superviser_email === $email){
                    $selection.push($student);
                }
            }
            return $selection;
        }


        //TODO:: Ritveeka
        //Do Others Similarly

        else if($user->role==='warden'){
            $prof=Staff::where('email','=',$email)->get();
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=$prof->hostel_student();
            return view($view_for_staff,compact('student'));
        }
        else if($user->role==='caretaker'){
            $prof=Staff::where('email','=',$email)->get();
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=$prof->hostel_student();
            return view($view_for_staff,compact('student'));
        }
        else if($user->role==='hod' || $user->role==='dept_lib_head'){
            $prof=Staff::where('email','=',$email)->get();
            $prof_dept=$prof->dept;
            //in model 'Staff' implement 'hostel_student' method which returns all students under him/her as guide using appropriate foreign_key and primary_key
            $student=Student::where('dept','=',$prof_dept)->get();
            return view($view_for_staff,compact('student'));
        }

        //for others "cc,library,F&A,registrar,workshop.student Affairs"
        //  return view($view_for_staff,compact('student'));

    }
}
