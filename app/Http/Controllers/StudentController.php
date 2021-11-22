<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
        public function index(){
            $students = Student::orderByRaw('id')->get();
        return view('students.index',['students'=>$students]);
    }
    public function create(){
        return view('students.create');
    }
    public function store(Request $request){
        $this ->validate($request, [
            'lname' => 'required',
            'fname'=> 'required',
            'course'=> 'required',
            'year'=> 'required',
        ]);

        Student::create( [
            'lname' => $request['lname'],
            'fname' => $request['fname'],
            'course' => $request['course'],
            'year' => $request['year'],
        ]);

        return redirect('/students')->with('info', 'Added a new student.');
        }
}