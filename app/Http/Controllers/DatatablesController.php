<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Yajra\Datatables\Datatables;
use App\Student;
use App\Staff;

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
            return Datatables::of($student)->make(true);
        }

        else if($role === 'warden' || $role==='caretaker'){
            $hostel = $prof->hostel;
            $student=Student::where('hostel','=',$hostel)->get();
            return Datatables::of($student)->make(true);
        }

        else if($role==='hod' || $role==='dept_lib_head'){

            $prof_dept=$prof->dept;
            $student=Student::where('dept','=',$prof_dept)->get();
            return Datatables::of($student)->make(true);
        }

        $student = Student::All();
        //for other non-specific roles return whole database of students
        return Datatables::of($student)->make(true);

    }
}