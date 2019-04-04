<!doctype html>

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
        <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
        <link rel="stylesheet" href="{{ asset('css/search-results.css') }}">
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
                    <li><a href="#">Movie Club</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="login">Account</a></li>
                </ul>

            </div> <!-- end top-nav -->
            </header>
            
            <div class="top-bar">
                <div class="topbar-grid">
                    <div class="topbar-grid-item">
                    <form action ="{{ route('search')}}" method="GET" class="search">
                        <i class="fa fa-search search-icon"></i>
                        <input type="text" name="query" id="query" class="search-box" placeholder="search for product">
                    </form> 
                    </div>

                    <div class="topbar-grid-item">
                    <h3> {{ $products->count() }} result(s) for the search for for '{{ request()->input('query') }}'</h3>
                    </div>
                </div>
            </div>
            
                <div class="featured-section">
                    <div class="products text-center">
                
                    @foreach($products as $product)
                        <div class="product">
                            <a href="{{route('Store.show',$product->slug)}}">
                                <div class="img"><img src="{{ asset('img/products/' .$product->slug. '.jpg') }}"style="height:400px" alt="product"></div>
                            </a>
                            <a href="{{route('Store.show',$product->slug)}}">
                                <div class="product-name">{{$product->name}}</div>
                            </a>
                            <div class="product-price">£{{$product->price}}</div>
                        </div> <!-- End Products -->
                    @endforeach
                    </div> <!-- End Products text-center -->
                </div> <!-- End featured-section -->

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