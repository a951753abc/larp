@extends('layouts.app')

@section('content')
    <div>
        <form role="form" method="POST" action="{{ isset($event) ? url('/event/'.$event->id) : url('/event') }}">
            {{ csrf_field() }}
            {{ isset($event) ?  method_field('PUT') : '' }}
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