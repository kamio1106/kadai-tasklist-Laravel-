@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Q3</h1>
        <h2>昨日行ったうどんやの名前は?(アルファベットで答えてね！)</h2>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group hidden-xs">
                    {!! Form::label('email', ' ') !!}
                    {!! Form::hidden('email', "ynanynan0010@gmail.com", ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', ' ') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
