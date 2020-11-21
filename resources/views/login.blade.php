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

{{--    <div id="login">--}}
{{--        <x-alert/>--}}
{{--        <div class="col-lg-6">--}}

{{--            <form action="{{ route('login') }}" method="POST">--}}
{{--                @csrf--}}
{{--                <label for="email">Email</label>--}}
{{--                <input type="email" name="email">--}}

{{--                <label for="password">Password</label>--}}
{{--                <input type="password" name="password">--}}

{{--                <button type="submit" class="btn">Login</button>--}}
{{--            </form>--}}

{{--        </div>--}}
{{--    </div>--}}

    <div id="login-page">
        <div class="container ">
            <div class="row text-center">
                <div class="col-lg-6 ml-auto">

                    <div class="card" >
                        <div class="card-header mt-4">
                            <img src="https://my1office.co/img/my1office_logo.png">
                        </div>
                        <x-alert/>
                        <div class="card-body">
                            <button class="loginBtn loginBtn--facebook">
                                Login with Facebook
                            </button>

                            <button class="loginBtn loginBtn--google">
                                Login with Google
                            </button>

                            <form action="{{ route('login') }}" method="POST" id="login-form" class="my-5">
                                @csrf
                                <div class="input-group my-3 px-5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email">
                                </div>

                                <div class="input-group my-3 px-5">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" name="password">
                                </div>

                                <a href="{{ route('forget') }}">Forget my password</a>

                            </form>

                        </div>
                        <button type="submit" class="btn login-btn mt-3" form="login-form">Login</button>

                    </div>


                </div>
            </div>
        </div>


    </div>
@endsection

