<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
    <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
<form action="{{ route('payment.process') }}" method="POST">
    @csrf
    <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="{{ config('services.stripe.key') }}"
        data-amount="1000"
        data-name="Product Name"
        data-description="Product Description"
        data-image="https://your-website.com/images/product-image.jpg"
        data-currency="usd"
        data-email="customer@example.com"
        data-locale="auto"
        data-panel-label="Pay Now"
        data-label="Pay Now"
        data-allow-remember-me="false"
        data-token="{{ YOUR_STRIPE_ID }}">
    </script>
</form>


    <script>
        // Create a Stripe client.
        var stripe = Stripe("{{config('services.stripe.key')}}");

        // Create an instance of Elements.
        var elements = stripe.elements();

        // Create a card Element and mount it to the card element div.
        var card = elements.create('card');
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

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>
</body>
</html>

