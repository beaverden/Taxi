@extends('adminPage')
@section('content')

<div class="container">
    @foreach ($comments as $comment) 
        <div class="well">
            {{ $comment->comment }}
        </div>
    @endforeach
    <div class="text-center">
        {!! $comments->render() !!}
    </div>
</div>

@stop