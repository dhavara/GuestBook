@extends('layout.mainlayout')

@section('title','My Project')

@section('page_title')
<h1>{{ $pagetitle }}</h1>
@endsection
@section('main_content')
<div class="container">
    {{-- <table class="table table-striped">
        <tr>
            <th>Project</th>
            <th>Description</th>
        </tr>
        
        @for($i = 1; $i <= 10; $i++)
        <tr>
            <td>Project {{ $i }}</td>
            <td>This is my simple page</td>
        </tr>
        @endfor
    </table>
    <br>
    <table class="table table-striped">
        <tr>
            <th>Project</th>
            <th>Semester</th>
            <th>Description</th>
        </tr>
        
        @for($i = 1; $i <= 10; $i++)
        <tr>
            <td>Project {{ $i }}</td>
            @if ($i % 2 == 0)
            <td>EVEN</td>
            @else
            <td>ODD</td>
            @endif
            <td>This is my simple page</td>
        </tr>
        @endfor
    </table> --}}
    <br>
    <table class="table table-striped">
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Project</th>
            <th>Semester</th>
            <th>Course</th>
            <th>Description</th>
            <th>Edit</th>
        </tr>
        {{-- @php ($projects = ['Calculator', 'Accounting', 
                            'Student Report', 'Pos Resto', 
                            'Online Store', 'Pet Shop']) --}}
        @foreach ($projects as $pro)
            @php ($i = $loop->index)
            @php ($i++)
            
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $pro['code'] }}</td>
                <td><a href="/myproject/{{ $pro['code'] }}"> {{ $pro['project'] }}</a></td>
                <td>{{ $pro['semester'] }}</td>
                <td>{{$pro['mata_kuliah'] }}</td>
                <td>
                    {{ $pro ['description'] }}
                </td>
                <td><a href="/editproject/{{ $pro['code'] }}"> Edit </a></td>
            </tr>
        @endforeach
    </table>
    <a href="/createproject" class="btn btn-light btn-lg d-grid gap-2">Add New Project</a>
</div>
@endsection