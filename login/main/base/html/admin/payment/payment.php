<?php
// Set your secret key. Remember to switch to your live secret key in production!
// See your keys here: https://dashboard.stripe.com/account/apikeys
require_once('stripe-php/init.php'); 

\Stripe\Stripe::setApiKey('sk_test_51HR9qWKjqmj5dEvXsXSIRo8sUEuW3l3uVswoEGQKK1lhXvI0PGGDFHy0AoeQgDm45xts2cwZBOCm9L3ozdZPgOo200rb8XYTBL');

\Stripe\PaymentIntent::create([
  'amount' => 1000,
  'currency' => 'myr',
  'payment_method_types' => ['card'],
  'receipt_email' => 'jenny.rosen@example.com',
]);
?>