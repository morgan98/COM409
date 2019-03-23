<!doctype html>

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
        <link rel="stylesheet" href="{{ asset('css/product.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">Movies Mobile</div>
                <ul>
                   <li><a href="welcome">home</a></li>
                    <li><a href="shop">Shop</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="#">Premium</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="login">Login/Register</a></li>
                </ul>
            </div> <!-- end top-nav -->
            </header>

              <div class="card">
              <img src="img/captainmarvel.jpg" alt="Captain Maravel[2019]" style="width:100%">
              <h1>Captain Marvel</h1>
              <p class="price">$19.99</p>
              <p></p>
              <p><button>Add to Cart</button></p>
              </div>
              <div class="card2">
              <img src="img/captainmarvel.jpg" alt="Captain Maravel[2019]" style="width:100%">
              <h1>Captain Marvel</h1>
              <p class="price">$19.99</p>
              <p></p>
              <p><button>Add to Cart</button></p>
              </div>

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