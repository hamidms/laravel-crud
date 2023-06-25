<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Request $request) {
        if($request->has('search')) {
            $students = \App\Models\Student::where('nama_depan', 'LIKE', '%'.$request->search.'%')->get();
        } else {
            $students = \App\Models\Student::all();
        }
        return view('student.index', ['students' => $students]);
    }

    public function create(Request $request) {
        \App\Models\Student::create($request->all());
        return redirect('/student')->with('sukses', 'Data berhasil diinput');
    }

    public function edit($id) {
        $student = \App\Models\Student::find($id);
        return view('student/edit', ['student' => $student]);
    }

    public function update(Request $request, $id) {
        $student = \App\Models\Student::find($id);
        $student->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $student->avatar = $request->file('avatar')->getClientOriginalName();
            $student->save();
        }
        return redirect('/student')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id) {
        $student = \App\Models\Student::find($id);
        $student->delete($student);
        return redirect('/student')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id) {
        $student = \App\Models\Student::find($id);
        return view('student.profile', ['student' => $student]);
    }
}
