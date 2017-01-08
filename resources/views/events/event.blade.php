@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="card" style="width: 23rem;">
            <img class="card-img-top" src="https://c2.staticflickr.com/2/1605/25228346924_2e927d2a50.jpg" alt="Card image cap">
            <div class="card-block">
                <h4 class="card-title">{{$event['name']}}</h4>
                <p class="card-text">{{$event['content']}}</p>
            </div>
        </div>
    </div>

@endsection