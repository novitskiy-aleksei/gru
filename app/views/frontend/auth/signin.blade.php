@extends('frontend/layouts/auth')

{{-- Page title --}}
@section('title')
Account Sign in ::
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="login-form">
    <div class="wrap">
        <div class="content">
            <h2 class="heading1">let's get in touch!</h2>
        </div>
        <form method="post" action="{{ route('signin') }}" >
            <div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                <div class="errors">{{ $errors->first() }}</div>
                <input name="email" placeholder="e-mail" type="text" class="textbox" value="{{ Input::old('email') }}" >&nbsp;&nbsp;
                <input name="password" placeholder="пароль" type="password" class="textbox" >
                <div class="clear"> </div>
            </div>

            <!-- Remember me -->
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox" name="remember-me" id="remember-me" value="1" /> Запомнить меня
                    </label>
                </div>
            </div>

            <div>
                <input type="submit" class="btn" value="Войти">
                <a class="btn" href="{{ route('home') }}">Отмена</a>
                <a href="{{ route('forgot-password') }}" class="btn btn-link">Я забыл пароль</a>
            </div>
        </form>
    </div>
    <div class="clear"> </div>
</div>
@stop
