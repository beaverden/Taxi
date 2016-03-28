@extends('index')
@section('content')

<div class="container">
    <h3 class="page-header">Contacts</h3>
    @foreach($contacts as $contact)
        <div class="media">
                <h4 class="media-heading">
                    <span class="text-center"><b>{{$contact->info}}</b></span>
                    <a class="label label-success text-center" style="text-decoration: none" href="tel:{{ $contact->tel }}">
                      <i class="fa fa-lg fa-phone"></i>
                      {{ $contact->tel }}
                    </a>
                </h4>      
        </div>
    @endforeach
</div>
@stop
