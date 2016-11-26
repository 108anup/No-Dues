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

}
