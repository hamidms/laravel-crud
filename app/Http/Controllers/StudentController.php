<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = \App\Models\Student::all();
        return view('student.index', ['students' => $students]);
    }

    public function create(Request $request) {
        \App\Models\Student::create($request->all());
        return redirect('/student')->with('sukses', 'Data berhasil diinput');
    }
}
