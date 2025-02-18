<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(){
        return view('students.index', ['students'=> Student::paginate(10)]);
    }
    public function create(){

    }
    public function store(Request $request){

    }
    public function show(Student $student){
        return view('students.show', compact('student'));
    }
}
