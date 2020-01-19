@extends('layouts.app')

@section('content')
@if (Auth::check())
<!-- ここにページ毎のコンテンツを書く -->
<div class=text-center>
    <h1>大正解！！おめでとう</h1>
    <h2>○○を開けてみよう！！<h2/>
</div>
@else
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Question 3</h1>
            {!! link_to_route('login', '問題はこちら', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>

@endif



@endsection