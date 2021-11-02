@extends('layout.mainlayout')

@section('title', 'My Project')

@section('page_title')
    <h1>{{ $pagetitle }}</h1>
@endsection
@section('main_content')
    <div class="container">
        <br>
        <div class="container"><a href="{{ route('myproject.create') }}"><button type="submit"
                    class="btn btn-primary mb-2">Create Project</button></a> </div>
        <table class="table table-striped">
            <tr>
                <th>NO</th>
                <th>CODE</th>
                <th>PROJECTS</th>
                <th>SEMESTER</th>
                <th>COURSE</th>
                <th>DESCRIPTION</th>
                <th>ACTIONS</th>
            </tr>
            @foreach ($projects as $pro)
                @php($i = $loop->index)
                @php($i++)

                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $pro['code'] }}</td>
                    <td>{{ $pro['project'] }}</td>
                    <td>{{ $pro['semester'] }}</td>
                    {{-- <td>{{ $pro['mata_kuliah'] }}</td> --}}
                    <td>
                        <a href="{{ route('mycourse.show', $pro->course->code) }}">
                            {{ $pro->course->name }}
                    </td>
                    <td>{{ $pro['description'] }}</td>
                    <td>
                        <div class="d-grid d-md-flex justify-content-center">
                            <a href="{{ route('myproject.show', $pro['code']) }}"><button type="button"
                                    class="btn btn-info me-md-2">Show</button></a>
                            <a href="{{ route('myproject.edit', $pro['id']) }}"><button type="button"
                                    class="btn btn-warning me-md-2">Edit</button></a>
                            <form action="{{ route('myproject.destroy', $pro['id']) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
