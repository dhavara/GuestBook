@extends('layout.mainlayout')

@section('title','My Project')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form method="POST">
            @csrf
            <div class="mb-3">
                <label for="inputProjectName" class="form-label">Project Code: </label>
                <input type="text" class="form-control" name="code" id="code">
                <label for="inputProjectName" class="form-label">Project Name: </label>
                <input type="text" class="form-control" name="project" id="project">
                <label for="inputDescription" class="form-label">Description: </label>
                <input type="text" class="form-control" name="description" id="description">
                <label for="inputSemester" class="form-label">Semester: </label>
                <input type="text" class="form-control" name="semester" id="semester">
                <label for="inputMatkul" class="form-label">Mata Kuliah: </label>
                <input type="text" class="form-control" name="mata_kuliah" id="mata_kuliah">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
        </form>
    </div>
@endsection