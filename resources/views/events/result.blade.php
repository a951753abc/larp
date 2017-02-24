@extends('layouts.app')

@section('content')
    <div class="row">
        你抽到:
    </div>
    <div class="row">
        <div class="card" style="width: 23rem;">
            <div class="card-block">
                <h4 class="card-title">{{$event['name']}}</h4>
            </div>
        </div>
    </div>
    <div class="row">
        ※請注意，情報有依照英文字母排序，如果此玩家沒有上一層情報，不能跳過給他。請確認該玩家有無對應情報。
    </div>
@endsection