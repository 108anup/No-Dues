<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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

    public function dash()
    {
        if(Auth()->check()) {
            $user = \Auth::User();
            $email = $user->email;
            if ($user->type == 'staff') {

                $prof=Staff::where('email','=',$email)->first();
                $roles = json_decode($prof->purpose);
                return view('dash.staff',['roles' => $roles]);

            } else if ($user->type == 'student') {
                $student=Student::where('email','=',$email)->first();
                return view('dash.student',['student'=>$student]);
            }
        }
    }

    public function update(Request $request){
        $purpose = $request->input('purpose');
        $rows = $request->input('ids');
        $status = $request->input('status');

        foreach($rows as $row){
            $student=Student::where('id','=',(int)$row)->first();
            $student["$purpose"] = $status;
            $student->save();
        }
        return 1;
    }


}
