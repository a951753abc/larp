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
    @elseif($type == 6)
        幻想漂流──商店街(不分類)
    @elseif($type == 7)
        幻想漂流──不流通的私人情報
    @elseif($type == 8)
        幻想漂流──學校
    @elseif($type == 9)
        幻想漂流──警察局
    @elseif($type == 10)
        事件
    @endif
    <div class="form-inline">
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/1'">
            商店街(不分類)
        </button>
        &nbsp;
        <button class="btn btn-sm btn-danger myMOUSE" onclick="location.href='/admin/2'">
            不流通的私人情報
        </button>
        &nbsp;
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/3'">
            平行世界的歷史幻影
        </button>
        &nbsp;
        <button class="btn btn-sm btn-danger myMOUSE" onclick="location.href='/admin/4'">
            學校
        </button>
        &nbsp;
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/5'">
            警察局
        </button>
    </div>
    <div class="form-inline">
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/6'">
            幻想漂流──商店街(不分類)
        </button>
        &nbsp;
        <button class="btn btn-sm btn-danger myMOUSE" onclick="location.href='/admin/7'">
            幻想漂流──不流通的私人情報
        </button>
        &nbsp;
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/8'">
            幻想漂流──學校
        </button>
        &nbsp;
        <button class="btn btn-sm btn-danger myMOUSE" onclick="location.href='/admin/9'">
            幻想漂流──警察局
        </button>
    </div>
    <div class="form-inline">
        <button class="btn btn-sm btn-success myMOUSE" onclick="location.href='/admin/10'">
            事件
        </button>
    </div>
    <div class="card">

        <ul class="list-group list-group-flush">
            @foreach($events as $event)
                <li class="list-group-item">
                    {{$event->name}}
                    <BR>
                    <button class="btn btn-sm btn-info myMOUSE" onclick="location.href='/event.show/{{$event->id}}'">瀏覽</button>
                    &nbsp;
                    <button class="btn btn-sm btn-primary myMOUSE" onclick="location.href='/event/{{$event->id}}/edit'">編輯</button>
                    &nbsp;
                    <button class="btn btn-sm btn-secondary myMOUSE" onclick="location.href='/user.event/{{$event->id}}/create'">分配情報</button>
                    &nbsp;
                    已分配角色:
                    <?php $num = 1;?>
                    @foreach($event->userEvent as $userEvent)
                        @if($num > 1)
                            、
                        @endif
                        @if ($userEvent->user->type == config('const.user'))
                            {{$userEvent->user->name}}
                            <?php $num++;?>
                        @endif
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
@endsection