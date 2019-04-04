<!doctype html>

<!-- Stripe Javascript Libary  -->
<script src="https://js.stripe.com/v3/"></script>

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
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}">
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
                    <li><a href="#">Movie Club</a></li>
                    <li><a href="#">Cart</a></li>
                    <li><a href="login">Account</a></li>
                </ul>
                </ul>
            </div> <!-- end top-nav -->
</header>

            <div class="row">
  <div class="col-75">
    <div class="checkoutcontainer">
      <!--payment-form connects form to Stripe Script -->
      <form action="payment-form">

        <div class="row">
          <div class="col-50">
            <div class="heading" style="color:black"><h3>Billing Address</h3></div>
            <label for="fname" style="color:black"><i class="fa fa-user" style="color:black" ></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email" style="color:black" ><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="Jane@gmail.com">
            <label for="adr" style="color:black" ><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="12 Botanic Ave">
            <label for="city" style="color:black" ><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Belfast">

            <div class="row">
              <div class="col-50">
                <label for="county" style="color:black" >County</label>
                <input type="text" id="county" name="county" placeholder="Co.Antrim ">
              </div>
              <div class="col-50">
                <label for="postcode" style="color:black" >Post Code</label>
                <input type="text" id="postcode" name="postcode" placeholder="BT80 7UT">
              </div>
            </div>
          </div>

          <div class="col-50">
          <div class="heading" style="color:black"><h3>Payment Method</h3></div>
            <label for="fname" style="color:black" >Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              
            </div>
            <label for="cname" style="color:black" >Name on Card</label>
            <input type="text" id="cname" name="cname" placeholder="Jane Goodmen">
            
            <div class="form-group">
            <label for="card-element">
            Credit or debit card
            </label>
            <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
            </div>
            </div>

            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
            </div>

        </div>
        <label>
          <input type="checkbox" style="color:black" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Pay" class="btn">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="checkoutcontainer">
    <div class="heading" style="color:black"><h3>Cart: {{ Cart::count() }} item(s) </h3></div>
        
      @foreach(Cart::content() as $item)
      <p><a href="{{ route('Store.show', $item->model->slug) }}">{{ $item->model->name }} | £{{ $item->model->price }}</a></p>
      
      <hr>

      @endforeach
      <div class="heading" style="color:black"><h4> SubTotal: £{{ Cart::subtotal() }}</h4></div>
      <div class="heading" style="color:black"><h4>VAT: £{{ Cart::tax() }}</h4></div>
      <div class="heading" style="color:black"><h4><b>Total: £{{ Cart::total() }}</b></h4></div>
    
      <a href="empty" style color:black>Remove item(s)</a>
    </div>

  
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
    <script>
    
    (function()
    {
      // Create a Stripe client.
var stripe = Stripe('pk_test_TYooMQauvdEDq54NiTphI7jx');

// Create an instance of Elements.
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element.
var card = elements.create('card', {
  style: style,
  
  //Hide Postcode field
  hidePostalCode: true
  
  });

// Add an instance of the card Element into the `card-element` <div>.
card.mount('#card-element');

// Handle real-time validation errors from the card Element.
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});

// Handle form submission.
var form = document.getElementById('payment-form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

 
  stripe.createToken(card).then(function(result) {
    if (result.error) {
      // Inform the user if there was an error.
      var errorElement = document.getElementById('card-errors');
      errorElement.textContent = result.error.message;
    } else {
      // Send the token to your server.
      stripeTokenHandler(result.token);
    }
  });
});


  function stripeTokenHandler(token) {
  // Insert the token ID into the form so it gets submitted to the server
  var form = document.getElementById('payment-form');
  var hiddenInput = document.createElement('input');
  hiddenInput.setAttribute('type', 'hidden');
  hiddenInput.setAttribute('name', 'stripeToken');
  hiddenInput.setAttribute('value', token.id);
  form.appendChild(hiddenInput);

  // Submit the form
  form.submit();
}

    })();
    
    
    
    
    
    </script>
</html>