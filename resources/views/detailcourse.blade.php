@extends('layout.courselayout')

@section('title','My Course')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-black rounded">
        <h1>{{ $course['name'] }}</h1>
        <p>Code: {{ $course['code'] }}</p>
        <p>Lecturer: {{ $course['lecturer'] }}  
        </p>
        <p>SKS: {{ $course['sks'] }}</p>
        <p>Description: {{ $course['description'] }}</p>
    </div>
@endsection

