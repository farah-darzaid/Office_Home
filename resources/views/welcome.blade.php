@extends('layouts.app')

@section('title',' Holla Amigo')


@section('content')
    <div id="index-page">
        <div class="main-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://1office.co/wp-content/uploads/2019/02/1900-1-e1551181824196.jpg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://1office.co/wp-content/uploads/revslider/agency-website-header/light1.jpg"  alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://1office.co/wp-content/uploads/2019/12/Screen-Shot-2019-12-10-at-14.53.28-min-1-e1575984508592.png" alt="...">
                    </div>xx
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

                <svg class="arrows">
                    <path class="a1" d="M0 0 L30 32 L60 0"></path>
                    <path class="a2" d="M0 20 L30 52 L60 20"></path>
                    <path class="a3" d="M0 40 L30 72 L60 40"></path>
                </svg>

            </div>
        </div>



    </div>
@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(".arrows").on("click",function () {
            window.scrollTo(0,700);
        })
    </script>
@endsection
