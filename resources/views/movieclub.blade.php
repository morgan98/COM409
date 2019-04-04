<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies Mobile</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/movieclub.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

        <!-- Top Navigation -->
        </head>
        <body>
            <header>
                <div class="top-nav container">
                    <div class="logo">Movies Mobile</div>
                    <ul>
                    <li><a href="welcome">home</a></li>
                        <li><a href="{{route('Store.index')}}">Shop</a></li>
                        <li><a href="about">About</a></li>
                        <li><a href="movieclub">Movie Club</a></li>
                        <li><a href="checkout">Cart</a></li>
                        <li><a href="login">Account</a></li>
                    </ul>
                    </ul>
                </div> <!-- end top-nav -->
            </header>

    <div class="grid">
        <div class="grid-item">
            <!-- Title -->
            <div class="title">
                <h2>Why join our Movie Club?</h2>
            </div>

            <!-- Body -->
            <div class="body">
                <h4>
                <p>Movie Club is a Preimum Service provided by Movies Mobile only avalible to Movies Mobile Members!</p>
                <br>
                <p>This exclusive Club allows its members to get access to the following:</p>
                <div class="indent-40">
                    <ul>
                        <div class="bold"><li>Recieve our weekly Newsletter</li></div>
                            <div class="indent">
                            <h5><p>This will include updates on what movie is going to be free next along with whats new and upcomming to the site.</p></h5>
                            </div><br>
                        <div class="bold"><li>Exclusive Discounts!</li></div>
                            <div class="indent">
                            <h5><p>Make massive savings from our big discounts accross the store.</p></h5>
                            </div><br>
                        <div class="bold"><li>Get full access to our weekly free movie</li></div>
                            <div class="indent">
                            <h5><p>Every week we choose a movie at random to be made completly FREE for out Movie Club members.</p></h5>
                            </div>
                    </ul>
                </div>
                </h4>
            </div>
        </div>

        <div class="grid-item">

            <!-- Movie Showcase -->
            <div class="showcase">
                <div class="body">
                    <div class="title">
                        <h4>This Months Free Movie!</h4>
                    </div>
                    <div class="showcase-img">
                        <img src="img/products/alien.jpg" alt="">
                    </div>
                    <h3>Alien</h3>
                    <p>Was £3, but now FREE!</p>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Footer -->
    <footer>
        <div class="footer-content container">          
            <ul>
                <li>Follow us:</li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
        </div> <!-- end footer-content -->
    </footer>

    </body>
</html>

