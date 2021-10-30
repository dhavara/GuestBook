@extends('layout.mainlayout')

@section('title','My Course')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-white rounded">
        <form action="{{ route('mycourse.update', $course['code']) }}" method="POST">
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <div class="mb-3">
                <label for="inputCourseName" class="form-label">Course Code: </label>
                <input type="text" class="form-control" name="code" id="code">

                <label for="inputCourseName" class="form-label">Course Name: </label>
                <input type="text" class="form-control" name="name" id="name">

                <label for="inputDescription" class="form-label">Lecturer: </label>
                <input type="text" class="form-control" name="lecturer" id="lecturer">

                <label for="inputSemester" class="form-label">SKS: </label>
                <input type="text" class="form-control" name="sks" id="sks">

                <label for="inputMatkul" class="form-label">Description: </label>
                <input type="text" class="form-control" name="description" id="description">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>  
        </form>
    </div>
@endsection