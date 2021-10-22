@extends('layout.mainlayout')

@section('title','My Project')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>{{ $project['project'] }}</h1>
        <p>Course: {{ $project['mata_kuliah'] }}</p>
        <p>Code: {{ $project['code'] }}</p>
    </div>
@endsection