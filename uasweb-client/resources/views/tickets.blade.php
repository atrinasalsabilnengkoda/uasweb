@extends('master')

@section('title', 'Your Tickets')

@section('konten')

<body>
    <div class="py-5">
        @if(count($details) > 0)
        @foreach($details as $det)
        <form action="/cancel" method="post">
            {{ csrf_field() }}
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card text-center">
                            <div class="card-header">
                                <h2>{{ $det->concert_title }}</h2>
                            </div>
                            <div class="card-body">
                                <input type="hidden" value="{{ $det->order_id }}" name="id" class="id">
                                <h5 class="card-title">{{ $det->concert_venue }}</h5>
                                <p class="card-text">Date: {{ $det->concert_date }}</p>
                                <p class="card-text">Class: {{ $det->ticket_class }}</p>
                                <p class="card-text">Order Status: {{ $det->status }}</p>
                                <button type="submit" class="btn btn-primary">Cancel Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <br>
        @endforeach
        @else
        <div class="py-5 text-center text-white h-100 align-items-center d-flex" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://static.pingendo.com/cover-bubble-dark.svg);  background-position: center center, center center;  background-size: cover, cover;  background-repeat: repeat, repeat;">
            <div class="container py-5">
                <div class="row">
                    <div class="mx-auto col-lg-8 col-md-10">
                        <h1 class="display-3 mb-4">You don't have any tickets yet :(</h1>
                        <p class="lead mb-5">Start your musical adventure by buying tickets from our app!</p>
                        <a href="/ticketing" class="btn btn-lg btn-primary mx-1">Buy Now</a>
                        <a class="btn btn-lg mx-1 btn-outline-primary" href="/">Home</a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
</body>
@endsection