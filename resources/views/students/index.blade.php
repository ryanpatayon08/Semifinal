@extends('base')

@section('content')

    @if ($info = Session::get('info'))

        <div class="card" style="padding: 10px">
            <div class="card-body bg-success text-white">
                {{$info}}
            </div>
        </div>

    @endif

    <div class="btn" style="float: right">
        <a href="{{url('/students/create')}}" class="btn btn-primary" >
            Add Student
        </a>
    </div>
    <h1>List of Students</h1>
    <table class='table table-bordered table-striped table-sm'>

        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Course</th>
                <th>Year</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $s)
                <tr>
                    <td>{{$s -> lname}}</td>
                    <td>{{$s -> fname}}</td>
                    <td>{{$s -> course}}</td>
                    <td>{{$s -> year}}</td>
                </tr>

            @endforeach
        </tbody>
    </table>

@endsection