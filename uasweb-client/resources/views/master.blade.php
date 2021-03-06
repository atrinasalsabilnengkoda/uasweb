<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- PAGE settings -->
    <link rel="icon" href="https://templates.pingendo.com/assets/Pingendo_favicon.ico">
    <title>@yield('title')</title>
    <meta name="description" content="Free Bootstrap 4 Pingendo Neon template for unique events.">
    <meta name="keywords" content="Pingendo conference event neon free template bootstrap 4">
    <!-- CSS dependencies -->
    <link rel="stylesheet" href="{{ asset('css/neon.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <!-- Script: Make my navbar transparent when the document is scrolled to top -->
    <script src="js/navbar-ontop.js"></script>
    <!-- Script: Animated entrance -->
    <script src="js/animate-in.js"></script>
</head>

<body class="text-center">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbar2SupportedContent">
                @if (Route::has('login'))
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item mx-2">
                        <a class="nav-link">Hello, {{ Auth::user()->email }}</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="/usertickets">Your Tickets</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/ticketing">Tickets</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn navbar-btn mx-2 btn-outline-primary" href="{{ route('logout') }}">
                            {{ __('Logout') }}
                        </a>
                    </li>
                    @else
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="btn navbar-btn mx-2 btn-outline-primary" href="{{ route('login') }}">Login</a>
                    </li>
                    @endauth
                </ul>
                @endif
            </div>
        </div>
    </nav>
    @yield('konten')
    <footer class="text-md-left text-center p-4">
        <div class="container">
            <div class="row">
                <div class="my-3 col-lg-4 col-md-6">
                    <h3>Crescendo</h3>
                    <p class="text-muted">May 2020</p>
                    <p class="my-3">
                        <a href="https://goo.gl/maps/ayn28vkB5F92" target="blank" class="text-muted">Empire State building 350 5th Ave, <br>New York, NY 10118</a>
                    </p>
                    <a class="btn btn-lg btn-primary shadowed" href="#">Register now</a>
                </div>
                <div class="my-3 col-lg-4 col-md-6">
                    <h3>Contact us</h3>
                    <form>
                        <fieldset class="form-group my-3">
                            <input type="email" class="form-control" id="Input Email" placeholder="Email"> </fieldset>
                        <fieldset class="form-group my-3">
                            <input type="message" class="form-control" id="Input Message" placeholder="Message"> </fieldset>
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </form>
                </div>
                <div class="col-lg-1"> </div>
                <div class="my-3 col-lg-3">
                    <h3>Follow</h3>
                    <a href="https://www.facebook.com" target="blank"><i class="fa fa-facebook-square text-muted fa-3x m-2"></i></a>
                    <a href="https://www.instagram.com" target="blank"><i class="fa fa-3x fa-instagram text-muted m-2"></i></a>
                    <a href="https://twitter.com" target="blank"><i class="fa fa-3x fa-twitter m-2 text-muted"></i></a>
                    <a href="https://plus.google.com" target="blank"><i class="fa fa-3x fa-google-plus-official text-muted m-2"></i></a>
                    <a href="https://pinterest.com" target="blank"><i class="fa fa-3x text-muted fa-pinterest-p m-2"></i></a>
                    <a href="https://www.youtube.com" target="blank"><i class="fa fa-3x text-muted fa-youtube-play m-2"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted">© Copyright 2018 Pingendo - All rights reserved. </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- JavaScript dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Script: Smooth scrolling between anchors in a same page -->
    <script src="js/smooth-scroll.js"></script>
    <pingendo onclick="window.open('https://pingendo.com/', '_blank')" style="cursor:pointer;position: fixed;bottom: 20px;right:20px;padding:4px;background-color: #00b0eb;border-radius: 8px; width:220px;display:flex;flex-direction:row;align-items:center;justify-content:center;font-size:14px;color:white">Made with Pingendo Free&nbsp;&nbsp;<img src="https://pingendo.com/site-assets/Pingendo_logo_big.png" class="d-block" alt="Pingendo logo" height="16"></pingendo>
</body>

</html>