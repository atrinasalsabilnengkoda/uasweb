@extends('master')

@section('title', 'Concert Tickets')

@section('konten')
<div class="py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="mx-auto col-lg-6 col-10">
                <h1>Ticketing</h1>
                <form class="text-left" method="POST" action="/purchase">
                    {{ csrf_field() }}
                    <input type="hidden" value="{{ Auth::user()->id }}" name="cust_id" class="cust_id">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <h4 class="">Class</h4>
                            <div class="btn-group">
                                <select class="btn btn-primary dropdown-toggle" name="class" id="class">
                                    @foreach($ticket as $ti)
                                    <option class="dropdown-item" value="{{ $ti->ticket_id }}">{{ $ti->ticket_class }} - {{ $ti->ticket_price }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="">Concert</h4>
                                <div class="btn-group">
                                    <select class="btn btn-primary dropdown-toggle" name="concert" id="concert">
                                        @foreach($concert as $co)
                                        <option class="dropdown-item" value="{{ $co->concert_id }}">{{ $co->concert_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="">Amount of tickets</h4>
                                <select class="btn btn-primary dropdown-toggle" name="amount" id="amount">
                                    <option class="dropdown-item" value="1">1</option>
                                    <option class="dropdown-item" value="2">2</option>
                                    <option class="dropdown-item" value="3">3</option>
                                    <option class="dropdown-item" value="4">4</option>
                                    <option class="dropdown-item" value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> I Agree with <a href="#">Term and Conditions</a> of the service </label> </div>
                    </div> <button type="submit" class="btn btn-primary">Buy Ticket</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection