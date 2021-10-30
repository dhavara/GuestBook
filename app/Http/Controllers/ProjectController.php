<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function show($code)
    {
        $projects = Project::where('code', $code)
            ->get()
            ->first();
        return view('showproject', [
            'title' => 'My Project',
            'pagetitle' => 'Detail Project',
            'project' => Project::where('code', $code)->get()->first()
        ]);

        return view('nama_view', compact('projects'));
    }

    public function index()
    {
        return view('myproject', [
            'title' => 'My Project',
            'pagetitle' => 'My Project',
            'projects' => Project::all()
        ]);

        $projects = Project::all();
        return view('nama_view', compact('projects'));
    }

    public function createProject()
    {
        return view('createproject', [
            'title' => 'My Project',
            'pagetitle' => 'Create Project'
        ]);
    }

    public function createProjectPost(Request $request)
    {
        $data = $request->input();
        DB::table('projects')->insert(
            array(
                'code' => $data['code'],
                'project' => $data['project'],
                'description' => $data['description'],
                'semester' => $data['semester'],
                'mata_kuliah' => $data['mata_kuliah'],
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        return redirect('/myproject');
    }

    public function editProject($code)
    {
        return view('editproject', [
            'title' => 'My Project',
            'pagetitle' => 'Edit Project'
        ]);
    }

    public function editProjectPost(Request $request, $code)
    {
        $data = $request->input();
        DB::table('projects')->where('code', $code)->update(
            array(
                'code' => $data['code'],
                'project' => $data['project'],
                'description' => $data['description'],
                'semester' => $data['semester'],
                'mata_kuliah' => $data['mata_kuliah'],
                'updated_at' => \Carbon\Carbon::now()
            )
        );

        return redirect('/myproject');
    }
}
