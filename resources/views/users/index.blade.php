@extends('layouts.app')

@section('content')
@if (count($users) > 0)
    <ul class="list-unstyled">
        @foreach ($users as $user)
            <li class="media">
                <img class="mr-2 rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                <div class="media-body">
                    @if (\Auth::id() === $user->id)
                        <div>
                            {{ $user->name }} <span style="color:red;">{you!!}</span> 
                        </div>
                        <div>
                            <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                        </div>
                    @else
                        <div>
                            {{ $user->name }}
                        </div>
                        <div>
                            <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                        </div>
                    @endif
                </div>
            </li>
        @endforeach
    </ul>
@endif
{!! link_to_route("tasks.index","投稿ページに戻る", [], ['class' => 'btn btn-info']) !!}
@endsection