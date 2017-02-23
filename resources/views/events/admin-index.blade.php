@extends('layouts.app')

@section('content')
    <div class="card">
        <ul class="list-group list-group-flush">
            @foreach($events as $event)
                <li class="list-group-item myMOUSE">
                    {{$event->name}}
                    <button class="btn btn-info" onclick="location.href='/event.show/{{$event->id}}'">瀏覽</button>
                    <button class="btn btn-primary" onclick="location.href='/event/{{$event->id}}/edit'">編輯</button>
                </li>
            @endforeach
        </ul>
    </div>
@endsection