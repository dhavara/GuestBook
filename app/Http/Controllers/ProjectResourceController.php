<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('myproject', [
            'title' => 'My Project',
            'pagetitle' => 'My Project',
            'projects' => Project::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createproject', [
            'title' => 'My Project',
            'pagetitle' => 'Create Project'
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
        $code = Str::lower(Str::substr($request->project, 0, 3));

        Project::create([
                'code' => $code,
                'project' => $request->project,
                'description' => $request->description,
                'semester' => $request->semester,
                'mata_kuliah' => $request->mata_kuliah,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            
        ]);
        return redirect(route('myproject.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        return view('showproject', [
            'title' => 'My Project',
            'pagetitle' => 'Detail Project',
            'project' => Project::where('code', $code)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('editproject', [
            'title' => 'My Project',
            'pagetitle' => 'Edit Project',
            'project' => $project
        ]);
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
        $code = Str::lower(Str::substr($request->project, 0, 3));
        $project = Project::findOrFail($id);
        $project->update([
                'code' => $code,
                'project' => $request->project,
                'description' => $request->description,
                'semester' => $request->semester,
                'mata_kuliah' => $request->mata_kuliah,
                'updated_at' => \Carbon\Carbon::now()    
        ]);

        return redirect(route('myproject.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = project::findOrFail($id);
        $project->delete();
        return redirect(route('myproject.index'));

    }
}
