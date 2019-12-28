@extends('layouts.app')

@section('content')
@if (Auth::check())
    ユーザー名：{{ Auth::user()->name }}
<!-- ここにページ毎のコンテンツを書く -->
    <h1>MyTask</h1>

    @if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Task</th>
                    <th>Status</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route("tasks.show",$task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {{ $tasks->links('pagination::bootstrap-4') }}
    {!! link_to_route('tasks.create', '新規投稿', [], ['class' => 'btn btn-primary']) !!}
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Taskbord</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>

@endif



@endsection