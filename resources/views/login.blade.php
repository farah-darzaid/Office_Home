@extends('layouts.app')

@section('title','Login')

@section('content')
{{--    <div id="login" class="mt-5">--}}
{{--        <div id="table">--}}
{{--            <a class="active">Sign in</a>--}}
{{--            <a class="">Sign Up</a>--}}
{{--        </div>--}}
{{--        <div id="signin">--}}
{{--            <form action="">--}}
{{--                <div class="form-group">--}}
{{--                    <label for="username">Username</label>--}}
{{--                    <input type="text" id="username" autofocus>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label for="pass">Password</label>--}}
{{--                    <input type="password" id="pass">--}}
{{--                    <span id="showpwd" class="fa fa-eye-slash"></span>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <label id="checkbox">--}}
{{--                        <input type="checkbox" checked><span class="text">Keep me signed in </span>--}}
{{--                    </label>--}}
{{--                </div>--}}
{{--                <div class="form-group">--}}
{{--                    <input type="submit" value="Sign in">--}}
{{--                </div>--}}
{{--            </form>--}}
{{--            <div class="hr"></div>--}}
{{--            <a href="#" id="froget-pass">Forget Password?</a>--}}

{{--        </div>--}}

{{--    </div>--}}

    <div id="login">
        <x-alert/>
        <div class="col-lg-6">

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Password</label>
                <input type="password" name="password">

                <button type="submit" class="btn">Login</button>
            </form>

        </div>
    </div>
@endsection

