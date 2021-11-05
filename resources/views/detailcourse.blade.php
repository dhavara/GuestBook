@extends('layout.courselayout')

@section('title', 'My Course')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection

@section('main_content')
    <div class="mt-4 p-5 bg-warning text-black rounded">
        <h1>{{ $course['name'] }}</h1>
        <p><b>Code: </b>{{ $course['code'] }}</p>
        <p><b>Lecturer: </b> {{ $course['lecturer'] }}</p>
        <p><b>SKS: </b>{{ $course['sks'] }}</p>
        <p><b>Description: </b>{{ $course['description'] }}</p>
    </div>
    <br>
    <table class="table table-striped">
    <tr>
        <th>NO</th>
        <th>CODE</th>
        <th>PROJECTS</th>
        <th>SEMESTER</th>
        <th>DESCRIPTION</th>
    </tr>
        @foreach ($course->projects as $pro)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                {{-- @php $l++ @endphp --}}
                <td>{{ $pro['code'] }}</td>
                <td>{{ $pro['project'] }}</td>
                <td>{{ $pro['semester'] }}</td>
                <td>{{ $pro['description'] }}</td>
            </tr>
        @endforeach
    </table>
@endsection
