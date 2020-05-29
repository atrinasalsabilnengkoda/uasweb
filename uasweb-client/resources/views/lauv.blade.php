@extends('master')

@section('title', 'LAUV ~how im feeling world tour~ 2019')

@section('konten')
<div class="py-5 text-center align-items-center d-flex" style="	background-image: linear-gradient(to left bottom, rgba(189, 195, 199, .75), rgba(44, 62, 80, .75)), url(/img/lauv2.jpeg);	background-size: 100%, 100%;	background-position: top left, top left;	background-repeat: repeat, repeat;" id="Cover">
    <div class="container py-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h1 class="display-3 mb-4">LAUV ~how i'm feeling~ World Tour</h1>
                <p class="lead mb-5">PLATINUM-certified independent singer, songwriter, producer, and pop visionary Lauv announces "~how i'm feeling world tour~ summer tour of asia, 2020” The 6 city run is set to kick off on June 16th in Bangalore, India, hit additional cities across Asia including Mumbai, Beijing, Shanghai, Taipei and wrap on June 27th in Jakarta, Indonesia. mxmtoon will be support on select dates.</p> <a href="#pricing" class="btn btn-primary mx-1 btn-lg">Pricing</a>
            </div>
        </div>
    </div>
</div>
<div class="py-5 text-center" style="	background-image: linear-gradient(to bottom, rgba(189, 195, 199, .75), rgba(44, 62, 80, .75)), url(/img/lauv3.jpg);	background-size: 100%, cover;	background-position: top left, top left;	background-repeat: repeat, repeat;" id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-0 py-2">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-4">
                        <h3>Tribune</h3>
                        <h2 class="my-3"><b>IDR 600K</b></h2>
                        <a class="btn btn-outline-primary mt-3" href="#">Buy</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="card py-2">
                    <div class="card-body p-4">
                        <h3>VIP</h3>
                        <h2 class="my-3"><b>IDR 3,500K</b></h2>
                        <a class="btn btn-primary mt-3" href="#">Buy Now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0 py-2">
                <div class="card border-0 rounded-0">
                    <div class="card-body p-4">
                        <h3>Festival</h3>
                        <h2 class="my-3"><b>IDR 1,300K</b></h2>
                        <a class="btn btn-outline-primary mt-3" href="#">Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
@endsection