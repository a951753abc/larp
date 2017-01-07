@extends('layouts.app')

<style>
    body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #eee;
    }

    .form-signin {
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin .checkbox {
        font-weight: normal;
    }
    .form-signin .form-control {
        position: relative;
        height: auto;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>

@section('content')
    <div class="container">
        <form class="form-signin" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}
            <div class="{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="sr-only">ID</label>
                <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}"
                       placeholder="ID" required autofocus>
                @if ($errors->has('id'))
                    <span class="help-block">
                        <strong>{{ $errors->first('id') }}</strong>
                    </span>
                @endif

                <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif

                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>
    </div>
@endsection
