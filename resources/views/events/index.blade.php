@extends('layouts.app')

@section('content')
    持有情報一覽
    <div class="card">
        <ul class="list-group list-group-flush">
            @foreach($events as $event)
                <li class="list-group-item myMOUSE"
                    onclick="location.href='{{URL::route('event.show', $event->event_id)}}'">
                    {{$event->event->name}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection