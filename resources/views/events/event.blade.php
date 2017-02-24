@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card" style="width: 23rem;">
            <div class="card-block">
                <h4 class="card-title">{{$event['name']}}</h4>
                <span class="card-text">{!! nl2br($event['content']) !!}</span>
            </div>
        </div>
    </div>
    {!! QrCode::size(150)->generate('http://larp.ddns.net/event.show/'.$event['token']); !!}
@endsection