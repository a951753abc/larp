@extends('layouts.app')

@section('content')
    @if($type == 1)
        商店街(不分類)
    @elseif($type == 2)
        不流通的私人情報
    @elseif($type == 3)
        平行世界的歷史幻影
    @elseif($type == 4)
        學校
    @elseif($type == 5)
        警察局
    @endif
    <div class="form-inline">
        <button class="btn btn-success myMOUSE" onclick="location.href='/admin/1'">
            商店街(不分類)
        </button>
        &nbsp;
        <button class="btn btn-danger myMOUSE" onclick="location.href='/admin/2'">
            不流通的私人情報
        </button>
        &nbsp;
        <button class="btn btn-success myMOUSE" onclick="location.href='/admin/3'">
            平行世界的歷史幻影
        </button>
        &nbsp;
        <button class="btn btn-danger myMOUSE" onclick="location.href='/admin/4'">
            學校
        </button>
        &nbsp;
        <button class="btn btn-success myMOUSE" onclick="location.href='/admin/5'">
            警察局
        </button>
    </div>
    <div class="card">

        <ul class="list-group list-group-flush">
            @foreach($events as $event)
                <li class="list-group-item">
                    {{$event->name}}
                    &nbsp;&nbsp;
                    <button class="btn btn-info myMOUSE" onclick="location.href='/event.show/{{$event->id}}'">瀏覽</button>
                    &nbsp;
                    <button class="btn btn-primary myMOUSE" onclick="location.href='/event/{{$event->id}}/edit'">編輯</button>

                </li>
            @endforeach
        </ul>
    </div>
@endsection