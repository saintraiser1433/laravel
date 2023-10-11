<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {
        // $data = Student::where('id',1)->get();
        // $data = Student::where('first_name','like','%bert%')->get();
        // $data = Student::where('age','<=','19')->orderBy('first_Name','asc')
        // ->limit(5)->get();
        // $data = DB::table('students')
        //         ->select(DB::raw('count(*) as gender_count,gender'))->groupBy('gender')->get();

        $data = Student::all();
        // $data = Student::where('id', 1)->firstOrFail()->get();
        return view('student.index', ['students' => $data]);
    }

    public function show($studId)
    {
        $data = Student::findOrFail($studId);
        return view('student.index', ['students' => $data]);
    }



    public function list($id)
    {

        return view('student.studentlist')
            ->with('name', $id);
    }
}
