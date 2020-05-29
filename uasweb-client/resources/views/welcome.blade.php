@extends('master')

@section('title', 'Homepage')

@section('konten')
<div class="d-flex align-items-center py-5 cover section-fade-in-out" style="	background-image: url(/conference/cover.jpg); box-shadow: 0px 0px 4px black; text-shadow: 0px 0px 4px black;">
    <div class="container" style="	box-shadow: 0px 0px 4px  black;">
        <div class="row">
            <div class="col-12 mt-5">
                <h1 class="display-4">CRESCENDO</h1>
                <p class="lead">Starts your worry-free online concert ticketing now!</p>
                @if (Route::has('login'))
                @auth
                <a href="/ticketing" class="btn btn-lg mt-4 btn-primary shadowed">Buy Now!</a><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
                @else
                <a href="login" class="btn btn-lg mt-4 btn-primary shadowed">Buy Now!</a><i class="d-block fa fa-angle-down pt-5 fa-3x"></i>
                @endauth
                @endif
            </div>
        </div>
    </div>
</div>
<div class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-6 p-3"> <a href="/johnmayer"><img class="img-fluid d-block" src="{{ asset('img/johnmayer1.jpg') }}" /></a>
                <h2 class="my-3"><b>John Mayer Asia Tour 2019</b></h2>
                <h3 class="">April 5th, 2019</h3>
                <p>Indonesia Convention Center, BSD City, Tangerang, Banten</p>
            </div>
            <div class="col-md-4 col-6 p-3"> <a href="/lauv"><img class="img-fluid d-block" src="{{ asset('img/lauv.jpg') }}"></a>
                <h2 class="my-3"> <b>LAUV ~how im feeling world tour~ 2020</b></h2>
                <h3 class="">June 27th, 2020</h3>
                <p>Tennis Indoor Senayan, South Jakarta</p>
            </div>
            <div class="col-md-4 col-6 p-3"> <a href="/kodaline"><img class="img-fluid d-block" src="{{ asset('img/kodaline.jpg') }}"></a>
                <h2 class="my-3"> <b>Kodaline Politics of Living Tour 2019</b></h2>
                <h3 class="">March 1st, 2019</h3>
                <p>Istora Senayan, South Jakarta</p>
            </div>
        </div>
    </div>
</div>
<div class="py-5 text-center text-white" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-md-12">
                <h1 class="mb-3">Team Members</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-1.svg" alt="Card image cap" width="200">
                <h4> <b>Atrina Salsabil Nengkoda</b></h4>
                <p class="mb-0">1841720216</p>
            </div>
            <div class="col-lg-4 col-md-6 p-4"></div>
            <div class="col-lg-4 p-4"> <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-3.svg" width="200">
                <h4> <b>Rizky Putra Pradhana B</b></h4>
                <p class="mb-0">1841720188</p>
            </div>
        </div>
    </div>
</div>
@endsection