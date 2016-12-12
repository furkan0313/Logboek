@extends('layouts.app')

@section('stylesheets')
    <link rel="stylesheet" href="/css/Login-Form-Clean.css">
@endsection

@section('content')
                    <div class="login-clean" style="padding-top:10%;">
                        <form role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}
                            <h2 class="sr-only">Login Form</h2>
                            <div class="illustration"><img src="/img/logo.png" style="max-height:155px;"></div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Log In</button>
                            </div><a href="#" class="forgot">Forgot your email or password?</a></form>
                    </div>

@endsection
