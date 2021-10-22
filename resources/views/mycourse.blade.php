@extends('layout.courselayout')

@section('title','My Course')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection
@section('main_content')
    <table class="table table-bordered bg-light">
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Course</th>
            <th>Lecturer</th>
            <th>Edit</th>
        </tr>
        @foreach ($courses as $pro)
            <tr>
                @php
                $lecturers = explode("; ", $pro['lecturer']);
                    $lecturerSize = sizeof($lecturers);
                @endphp
                <td rowspan="{{ $lecturerSize }}">{{ $loop->index+1 }}</td>
                <td rowspan="{{ $lecturerSize }}">{{ $pro['code'] }}</td>
                <td rowspan="{{ $lecturerSize }}"><a href="/mycourse/{{ $pro['code'] }}"> {{ $pro['name'] }}</a></td>
                <td>{{ $lecturers [0] }}</td>
                <td rowspan="{{ $lecturerSize }}"><a href="/editcourse/{{ $pro['code'] }}"> Edit </a></td>
            </tr>
            @foreach($lecturers as $lecturer)
            @if($loop->iteration>1)
                <tr>
                    <td>
                        {{ $lecturer }}
                    </td>
                </tr>
            @endif
            
            @endforeach
        @endforeach
    </table>
    <a href="/createcourse" class="btn btn-light btn-lg d-grid gap-2">Add New Course</a>
</div>
@endsection