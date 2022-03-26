<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Course;
use App\Trainer;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class StudentController extends Controller
{

    public function index()
    {
        $data['students'] = Student::select('id', 'name', 'email', 'spec')
            ->orderBy('id', 'DESC')->get();

        return view('admin.students.index')->with($data);
    }

    public function create()
    {
        $data['student'] = Student::select('id', 'name','email','spec')->get();

        return view('admin.students.create')->with($data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|email|unique:students',
            'spec' => 'nullable|string',
        ]);

        Student::create($data);

        return redirect(route('admin.students.index'));
    }

    public function edit($id)
    {
        $data['student'] = Student::select('id', 'name','email','spec')->get();
        $data['student'] = Student::findOrFail($id);
        return view('admin.students.edit')->with($data);
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|email|unique:students',
            'spec' => 'nullable|string',
        ]);

        Student::findOrFail($request->id)->update($data);

        return back();
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();

        return back();
    }

    public function showcourses($id)
    {
        $data['courses'] = Student::findOrFail($id)->courses;
        $data['student_id'] = $id;

        return view('admin.students.showcourses')->with($data);
    }

    public function approvecourse($id, $c_id)
    {
        DB::table('course_student')->where('student_id', $id)->where('course_id', $c_id)->update([
           'status' => 'approve'
        ]);

        return back();
    }

    public function rejectcourse($id, $c_id)
    {
        DB::table('course_student')->where('student_id', $id)->where('course_id', $c_id)->update([
            'status' => 'reject'
        ]);

        return back();
    }

}
