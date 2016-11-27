<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use App\User;
use App\Staff;
use App\Dept_Prof_Status;

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
                $branch_prof = Staff::where('dept',$student->dept)->get();
                $stud = array();

                foreach($branch_prof as $p){

                    $res = Dept_Prof_Status::where([
                        ['stud_id', '=', $student->id],
                        ['prof_id', '=', $p->id]
                    ])->first();

                    $stat = "Due";
                    if(count($res)){
                        $stat = $res->first()->status;
                    }

                    $rec['name'] = $p->name;
                    $rec['status'] = $stat;
                    array_push($stud,$rec);
                }
                //return json_encode($stud);

                return view('dash.student',['student'=>$student, 'dept_profs'=>$stud]);
            }
        }
    }

    public function update(Request $request){

        $purpose = $request->input('purpose');
        $rows = $request->input('ids');
        $status = $request->input('status');

        if($purpose == "prof"){
            $user = \Auth::User();
            $email = $user->email;
            $prof = Staff::where('email','=',$email)->first();

            foreach($rows as $row){

                $res = Dept_Prof_Status::where([
                    ['stud_id', '=', $row],
                    ['prof_id', '=', $prof->id]
                ])->first();

                if(count($res)){
                    $rec = $res->first();
                    $rec->status = $status;
                    $rec->save();
                }
                else{
                    $rec = new Dept_Prof_Status();
                    $rec["stud_id"] = $row;
                    $rec["prof_id"] = $prof->id;
                    $rec["status"] = $status;
                    $rec->save();
                }
            }
        }
        else {

            foreach ($rows as $row) {
                $student = Student::where('id', '=', (int)$row)->first();
                $student["$purpose"] = $status;
                $student->save();
            }
        }
        return 1;
    }


}
