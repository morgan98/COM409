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
                    <li><a href="#">Movie Club</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="login">Account</a></li>
                </ul>
                </ul>
            </div> <!-- end top-nav -->
</header>

<!-- Body -->
<div class="card">
<div class="pagebody">
<h6> Movie Club! </h6>
<p>

    Movie Club is a Preimum Service provided by Movies Mobile only avalible to Movies Mobile Members!. 
    
    With Movie Club members recieve access to:

    > Access to the weekly Newsletter  

    > Exculsive offers and discounts

    > A FREE monthly Movie 
</P>    
</div><!-- End Body -->
</div><!-- End card -->

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

