@extends('base')

@section('content')

    <h1>Add New Student</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::open(['url' => '/students', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('Last Name') }}
                {{ Form::text('lname', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('First Name') }}
                {{ Form::text('fname', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Course') }}
                {{ Form::text('course', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group">
                {{ Form::label('Year') }}
                {{ Form::number('year', null, ['class' => 'form-control']) }}
            </div>

            <div class="form-group" style="padding-top: 15px;">
                <button class="btn btn-primary" style="float: right">
                    Add Student
                </button>
            </div>
        </div>

        <div class="col md-7">
            @if (count($errors)>0)
                <div class="card-body bg-danger text-warning">
                    Please fill this fields:
                    <ul>
                        @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                        @endforeach
                    </ul>

                </div>
            @endif


        </div>

    {!! Form::close() !!}

    </div>

@endsection