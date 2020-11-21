<!doctype html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>
<body style="font-family: sans-serif; background: #fff">
    @if(!request()->is('login'))
        @include('layouts.navbar')
    @endif

    <div id="app">
        @yield('content')

    </div>
    @if(!request()->is('login'))
        @include('layouts.footer')
    @endif

    @yield('scripts')
<script src="{{ asset('js/app.js') }}"></script>
    <script async src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(function () {
            var scroll_start = 0;
            var startchange = $('#navbar');

            if (startchange.length){

                $(document).scroll(function() {
                    scroll_start = $(this).scrollTop();
                    if (scroll_start > 10) {
                        $("#navbar").css('background-color', '#fff');
                        $("#logo").attr("src", "https://1office.co/wp-content/uploads/2017/11/logo_1office_GB_H.svg");
                        $("#navbar .nav-link").css("color","#000");

                        $(".nav-link").hover(function() {
                            $(this).css("color","#98c93c")
                        } ,function() {
                            $(this).css("color", "#000")
                        });

                    } else {
                        $('#navbar').css('background-color', 'transparent');
                        $("#logo").attr("src", "https://1office.co/wp-content/uploads/2017/10/logo_1office_GW_H.svg");
                        $("#navbar .nav-link").css("color","#fff");
                        $(".nav-link").hover(function() {
                            $(this).css("color","#98c93c")
                        } ,function() {
                            $(this).css("color", "#fff")
                        });


                    }
                })
            }

        });

        $('#navbar .dropdown').hover(function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(200);

        }, function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(200);

        });
    </script>
</body>
</html>
