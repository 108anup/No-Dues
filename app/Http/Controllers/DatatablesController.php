<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Yajra\Datatables\Datatables;
use App\Student;
use App\Staff;
use App\Dept_Prof_Status;

class DatatablesController extends Controller
{
    /**
     * Displays datatables front end view
     *
     * @return \Illuminate\View\View
     */
    public function getIndex()
    {
        return view('home');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        $student = Student::All();
        return Datatables::of($student)->make(true);
    }

    public function getData(Request $request){

        $user = \Auth::user();
        $email=$user->email;
        $type = $user->type;
        $role = $request->input('role');

        if($type==='student'){
            return NULL;
        }

        $prof=Staff::where('email','=',$email)->first();
        //return $prof;
        $roles = $prof->purpose;
        $roles = json_decode($roles);

        if (!in_array($role, $roles)) {
            return NULL;
        }

        if($role === 'superviser'){
            $student = $prof->students;
        }

        else if($role === 'warden' || $role==='caretaker'){
            $hostel = $prof->hostel;
            $student=Student::where('hostel','=',$hostel)->get();
        }

        else if($role==='dept_lib_head'){

            $prof_dept=$prof->dept;
            $student=Student::where('dept','=',$prof_dept)->get();
        }
        else if($role ==="hod"){
            $prof_dept=$prof->dept;
            $branch_prof = Staff::where('dept',$prof_dept)->get();
            $stud = Student::where('dept',$prof_dept)->get();
            $student = array();
            $flag = true;
            foreach($stud as $s){
                foreach($branch_prof as $p){
                    $res = Dept_Prof_Status::where([
                        ['stud_id', '=', $s->id],
                        ['prof_id', '=', $p->id]
                    ])->first();

                    if (!$res) {
                        $flag = false;
                    }
                }
                if($flag) {
                    array_push($student, $s);
                }
            }
            $student = collect($student);
        }
        else if($role==='prof'){

            $prof_dept=$prof->dept;
            $student=Student::where('dept','=',$prof_dept)->get();
            foreach($student as $stud){
                $res = Dept_Prof_Status::where([
                    ['stud_id', '=', $stud->id],
                    ['prof_id', '=', $prof->id]
                ])->first();
                $stat = "Due";
                if(count($res)){
                    $stat = $res->first()->status;
                }
                $stud["dept_prof"] = $stat;
            }
        }
        else {
            $student = Student::All();
            //for other non-specific roles return whole database of students
        }

        foreach($student as $stud){
            if(!isset($stud["dept_prof"])){
                $stud["dept_prof"] = "NA";
            }
        }

        return Datatables::of($student)->make(true);

    }
}