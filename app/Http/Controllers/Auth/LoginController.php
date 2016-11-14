<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;




    //Overriden Functions
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'password' => 'required','role' => 'required',
        ]);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password','role');
    }

    protected function authenticated($request, $user)
    {
        $student=Student::all();
        //view for students
        $view_for_student='';
        //view for staff
        $view_for_staff='';
        if($user->role === 'student') {
            //passing the user which is a student
           // return view($view_for_student,compact('user'));
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





    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
}
