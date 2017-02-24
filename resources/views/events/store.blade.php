@extends('layouts.app')

@section('content')
    <div>
        <form role="form" method="POST" action="{{ isset($event) ? url('/event/'.$event->id) : url('/event') }}">
            {{ csrf_field() }}
            {{ isset($event) ?  method_field('PUT') : '' }}
            <div class="form-group">
                <label for="type" class="col-md-4 control-label">情報分類</label>

                <div class="col-md-6">
                    <select name="type" id="type">
                        <option value="1" {{ isset($event) && $event->type == 1 ? 'selected' : ''}}>商店街(不分類)</option>
                        <option value="2" {{ isset($event) && $event->type == 2 ? 'selected' : ''}}>不流通的私人情報</option>
                        <option value="3" {{ isset($event) && $event->type == 3 ? 'selected' : ''}}>平行世界的歷史幻影</option>
                        <option value="4" {{ isset($event) && $event->type == 4 ? 'selected' : ''}}>學校</option>
                        <option value="5" {{ isset($event) && $event->type == 5 ? 'selected' : ''}}>警察局</option>
                        <option value="6" {{ isset($event) && $event->type == 6 ? 'selected' : ''}}>幻想漂流──商店街(不分類)</option>
                        <option value="7" {{ isset($event) && $event->type == 7 ? 'selected' : ''}}>幻想漂流──不流通的私人情報</option>
                        <option value="8" {{ isset($event) && $event->type == 8 ? 'selected' : ''}}>幻想漂流──學校</option>
                        <option value="9" {{ isset($event) && $event->type == 9 ? 'selected' : ''}}>幻想漂流──警察局</option>
                        <option value="10" {{ isset($event) && $event->type == 10 ? 'selected' : ''}}>事件</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">情報名稱</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ $event->name or '' }}" required autofocus>
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="col-md-4 control-label">情報內容</label>

                <div class="col-md-12">
                    <textarea name="content" id="content" cols="150" rows="10">{{ $event->content or '' }}</textarea>
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