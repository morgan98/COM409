<!doctype html>

<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Movies Mobile - {{$product->name}}</title>

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
                    <li><a href="{{route('Store.index')}}">Shop</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="movieclub">Movie Club</a></li>
                    <li><a href="checkout">Cart</a></li>
                    <li><a href="login">Account</a></li>
                </ul>
            </div> <!-- end top-nav -->
            </header>
            <div class="top-bar">
             <form action ="{{ route('search')}}" method="GET" class="search">
                 <i class="fa fa-search search-icon"></i>
                 <input type="text" name="query" id="query" class="search-box" placeholder="search for product">
             </form>  
            </div> <!-- End Top Bar --> 

           
              <!--LEFT COLUMN-->
      <div class="row">
      <div class="leftcolumn">
      <div class="card">
      <!--<div class="img"><img src="{{ asset('storage/' .$product->image) }}"style="height:400px" alt="product"></div>-->
      <div class="img"><img src="{{ asset('img/products/' .$product->slug. '.jpg') }}"style="height:400px" alt="product"></div>
        <div class="price">£{{$product->price}}</div>
          <!--<button type="button" class="addtocart">Add to Cart</button>-->
          <form action="{{ route('checkout.show') }}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $product->id }}">
            <input type="hidden" name="name" value="{{ $product->name }}">
            <input type="hidden" name="name" value="{{ $product->slug }}">
            <input type="hidden" name="price" value="{{ $product->price }}">
            <button type="submit" class="addtocart">Add to Cart</button>  
          </form>
         </div><!-- END imageCard -->

      
        </div>
        

    <!--RIGHT COLUMN-->
    <div class="rightcolumn">
        <div class="card">
        <H5> {{$product->name}}</H5>

        <p> {!! $product->description !!}. </p>    
        
        
        </div>
        </div>
   
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