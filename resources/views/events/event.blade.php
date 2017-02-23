@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card" style="width: 23rem;">
            <div class="card-block">
                <h4 class="card-title">{{$event['name']}}</h4>
                <p class="card-text">{{$event['content']}}</p>
            </div>
        </div>
    </div>

@endsection