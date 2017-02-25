@extends('layouts.app')

@section('content')
    <div>
        <form role="form" method="POST" action="/event.select">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="type" class="col-md-4 control-label">情報分類</label>

                <div class="col-md-6">
                    <select name="type" id="type">
                        <option value="1">商店街(不分類)</option>
                        <option value="4">學校</option>
                        <option value="5">警察局</option>
                        <option value="6">幻想漂流──商店街(不分類)</option>
                        <option value="8">幻想漂流──學校</option>
                        <option value="9">幻想漂流──警察局</option>
                        <option value="12">幻想圖書館</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">角色名稱</label>

                <div class="col-md-6">
                    <select name="name" id="name">
                        @foreach($users as $user)
                            <option value="{{$user['id']}}">{{$user['name']}}</option>
                        @endforeach
                            <option value="18">幻想圖書館</option>
                    </select>
                </div>
            </div>
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