@extends('index')
@section('content')


<div class="page-header">
    <h2 class="page-header text-center">People</h2>
    @foreach ($crew as $member)
    <div class="media">
        <div class="media-left">
            <img class="media-object " src="{{$member->photo}}">
        </div>
        <div class="media-body">
          <h2 class="media-heading">{{$member->name}}</h2>
          {{$member->info}}
        </div>
    </div>
    @endforeach
    
</div>
@stop
