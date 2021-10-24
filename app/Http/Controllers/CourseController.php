<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function show($code)
    {
        return view('detailcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Detail Course',
            'course' => Course::where('code', $code)->get()->first() //mencari di kolom code dengan kata kunci $code
        ]);
    }

    public function index()
    {
        return view('mycourse', [
            'title' => 'My Course',
            'pagetitle' => 'My Course',
            'courses' => Course::all()
        ]);
    }

    public function createCourse()
    {
        return view('createcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Create Course'
        ]);
    }

    public function createCoursePost(Request $request)
    {
        $data = $request->input();
        DB::table('courses')->insert(
            array(
                'name' => $data['name'],
                'code' => $data['code'],
                'lecturer' => $data['lecturer'],
                'sks' => $data['sks'],
                'description' => $data['description'],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        return redirect('/mycourse');
    }

    public function editCourse($code)
    {
        return view('editcourse', [
            'title' => 'My Course',
            'pagetitle' => 'Edit Course'
        ]);
    }

    public function editCoursePost(Request $request, $code)
    {
        $data = $request->input();
        DB::table('courses')->where('code', $code)->update(
            array(
                'name' => $data['name'],
                'code' => $data['code'],
                'lecturer' => $data['lecturer'],
                'sks' => $data['sks'],
                'description' => $data['description'],
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        return redirect('/mycourse');
    }
}
