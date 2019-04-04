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
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
            <div class="top-nav container">
                <div class="logo">Movies Mobile</div>
                <ul>
                <li><a href="{{route('Home')}}">home</a></li>
                    <li><a href="{{route('Store.index')}}">Shop</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="movieclub">Movie Club</a></li>
                    <li><a href="checkout">Cart</a></li>
                    <li><a href="login">Account</a></li>
                </ul>
                </ul>
            </div> <!-- end top-nav -->

            <div class="hero container">
                <div class="hero-copy">
                    <h1>Welcome...</h1>
                    <p>To Movies Mobile! You one stop shop for the latest Blockbusters and Indie hits, all ready for instant download</p>
                    
                </div> <!-- end hero-copy -->

                <div class="hero-image">
                    <img src="img/captainmarvel.jpg" alt="Captain Marvel[2019]">
                </div>
            </div> <!-- end hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Featured!</h1>

                <div class="products text-center">
                
                @foreach($products as $product)
                <div class="product">
                <!--<a href="{{route('Store.show',$product->slug)}}"><img src="{{ asset('storage/' .$product->image) }}" style="height:300px"  alt="product"></a>-->
               <!-- Old Method for Calling Image(Kept as fallback) -->
                 <a href="{{route('Store.show',$product->slug)}}"><img src="{{ asset('img/products/' .$product->slug. '.jpg') }}" style="height:300px"  alt="product"></a> 

                        <a href="#"><div class="product-name">{{$product->name}}</div></a>
                        <div class="product-price">£{{$product->price}}</div>
                        </div> <!-- end products -->
                @endforeach
           
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="shop" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

      

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