@extends('layouts.app')

@section('content')

@include("commons.error_messages")

<!-- ここにページ毎のコンテンツを書く -->
<h1>新規作成ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($task, ['route' => 'tasks.store']) !!}
        <div class="form-group">
            {!! Form::label('content', 'Task:') !!}
            {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>    
        <div class="form-group">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>


@endsection