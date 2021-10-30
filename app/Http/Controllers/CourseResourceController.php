<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CourseResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('mycourse', [
            'title' => 'My Course',
            'pagetitle' => 'My Course',
            'courses' => Course::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Create Course'
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
        Course::create([
            'name' => $request->name,
            'code' => $request->code,
            'lecturer' => $request->lecturer,
            'sks' => $request->sks,
            'description' => $request->description,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        return redirect('/mycourse');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('detailcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Detail Course',
            'course' => Course::where('code', $code)->get()->first() //mencari di kolom code dengan kata kunci $code
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($code)
    {
        $course = Course::findOrFail($code);
        return view('editcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Edit Course',
            'course' => $course
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $course = Course::findOrFail($code);
        $course->update([
            'name' => $request->name,
            'code' => $request->code,
            'lecturer' => $request->lecturer,
            'sks' => $request->sks,
            'description' => $request->description,
            'updated_at' => \Carbon\Carbon::now()

        ]);

        return redirect('/mycourse');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $course = course::findOrFail($code);
        $course->delete();
        return redirect(route('mycourse.index'));
    }
}
