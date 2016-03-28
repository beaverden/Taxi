@extends('adminPage')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <ul class="list-group">
                @foreach ($blocked as $ip)
                    @if ($ip->whitelisted == 0)
                    <li class="list-group-item">
                        <span style="font-size:16px" class="label label-warning">{{ $ip->ip_address }}</span>
                        <button data-ip="{{ $ip->ip_address }}" class="btn btn-danger btn-sm whitelist" title="Unblock">
                            <i class="fa fa-lg fa-close"></i>
                        </button>
                    </li>
                    @endif
                @endforeach
              </ul>
        </div>
    </div>
    <div class="text-center">
        {!! $blocked->render() !!}
    </div>
    
    {!! Html::script('js/whitelist.js') !!}
</div>

@stop