@extends('layout.courselayout')

@section('title', 'My Course')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection
@section('main_content')
    <div class="container"><a href="{{ route('mycourse.create') }}"><button type="submit"
                class="btn btn-primary mb-2">Create Course</button></a> </div>
    <table class="table table-bordered bg-light">
        <tr>
            <th>NO</th>
            <th>CODE</th>
            <th>COURSE</th>
            <th>LECTURER</th>
            <th>ACTIONS</th>
        </tr>
        @foreach ($courses as $pro)
            <tr>
                @php
                    $lecturers = explode('; ', $pro['lecturer']);
                    $lecturerSize = sizeof($lecturers);
                @endphp
                <td rowspan="{{ $lecturerSize }}">{{ $loop->index + 1 }}</td>
                <td rowspan="{{ $lecturerSize }}">{{ $pro['code'] }}</td>
                <td rowspan="{{ $lecturerSize }}"><a href="/mycourse/{{ $pro['code'] }}"> {{ $pro['name'] }}</a></td>
                <td>{{ $lecturers[0] }}</td>
                <td>
                    <div class="d-grid d-md-flex justify-content-center">
                        <a href="{{ route('mycourse.show', $pro['code']) }}"><button type="button"
                                class="btn btn-info me-md-2">Show</button></a>
                        <a href="{{ route('mycourse.edit', $pro['code']) }}"><button type="button"
                                class="btn btn-warning me-md-2">Edit</button></a>
                        <form action="{{ route('mycourse.destroy', $pro['code']) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @foreach ($lecturers as $lecturer)
                @if ($loop->iteration > 1)
                    <tr>
                        <td>
                            {{ $lecturer }}
                        </td>
                    </tr>
                @endif

            @endforeach
        @endforeach
    </table>
    </div>
@endsection
