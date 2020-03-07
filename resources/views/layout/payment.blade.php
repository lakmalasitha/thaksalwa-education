<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    <script src="https://js.stripe.com/v3/"></script>
    <title>payment</title>
</head>
<body>
    <form action="{{ url('charge') }}" method="post" id="payment-form">
        <div class="form-row">
            <p><input type="text" name="amount" placeholder="Enter Amount" /></p>
            <p><input type="email" name="email" placeholder="Enter Email" /></p>
            <label for="card-element">
            Credit or debit card
            </label>
            <div id="card-element">
            <!-- A Stripe Element will be inserted here. -->
            </div>
         
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
        </div>
        <button>Submit Payment</button>
        {{ csrf_field() }}
    </form>
    <script>
        var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
        </script>
        <script src="{{ asset('/js/card.js') }}"></script>
</body>
</html>