<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bulma.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <title>payment</title>
</head>
<body>
    <div class="columns">
        <div class="column is-3"></div>
        <div class="pay column is-6">
            <h1 class=" head has-text-centered is-capitalized has-text-weight-bold is-family-monospace is-size-1 has-text-danger">Payment Details</h1>
            <form action="{{ url('charge') }}" method="post" id="payment-form">
                <div class="form-row">
                        <div class="field">
                                <div class="control">
                                    <p><input class="input" type="text" name="amount" placeholder="Enter Amount" /></p>
                                </div>
                        </div>
                        <div class="field">
                                <div class="control">
                                    <p><input class="input" type="email" name="email" placeholder="Enter Email" /></p>
                                </div>
                        </div>
                    
                   
                    <label for="card-element" class="has-text-weight-bold">
                    Credit or debit card
                    </label>
                    <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                    </div>
                 
                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                </div>
                <div class="payment">
                        <button class="button is-black is centered">Sbmit Payment</button>
                </div>
               
                {{ csrf_field() }}
            </form>

        </div>
        <div class="column is-3"></div>
    </div>
    

        


    

    <script>
        var publishable_key = '{{ env('STRIPE_PUBLISHABLE_KEY') }}';
        </script>
        <script src="{{ asset('/js/card.js') }}"></script>
</body>
</html>