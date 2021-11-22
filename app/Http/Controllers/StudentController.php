<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('student', [
            'title' => 'Student',
            'pagetitle' => 'Students',
            'students' => student::all() //mencari di kolom code dengan kata kunci $code
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentCreate', [
            'title' => 'Student',
            'pagetitle' => 'Create Student'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        student::create($request->all());
        return redirect(route('students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nim)
    {
        return view('studentView', [
            'title' => 'Students',
            'pagetitle' => 'Detail Student',
            'student' => student::where('nim', $nim)->get()->first(),
            'projects' => Project::all() //mencari di kolom code dengan kata kunci $code
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nim)
    {
        $student = student::where('nim', $nim)->first();
        $title = 'Students';
        return view('studentEdit', compact('student', 'title'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = student::where('nim', $id)->first();
        $student->update($request->all());
        return redirect(route('students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = student::where('nim', $id)->first();
        $student->delete();
        return redirect(route('students.index'));
    }
}
