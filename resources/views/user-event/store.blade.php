@extends('layouts.app')

@section('content')
    <div>
        <form role="form" method="POST" action="{{ url('/user.event') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <div class="col-md-6">
                    {{ $event->name or '' }}
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    {!! nl2br($event->content) !!}
                </div>
            </div>
            @foreach($users as $user)
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input"
                           @if($user_event->count() > 0)
                               @foreach($user_event as $value)
                                   @if($value->user_id == $user['id'])
                                       checked
                                   @endif
                               @endforeach
                           @endif
                           type="checkbox"
                           id="user"
                           name="user[]"
                           value="{{$user['id']}}"> {{$user['name']}}
                </label>
            </div>
            @endforeach
            <input type="hidden" name="event_id" value="{{$event->id}}">
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        送出
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection