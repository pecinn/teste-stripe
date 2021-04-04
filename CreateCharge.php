<?php
    require ('vendor/autoload.php');

    \Stripe\Stripe::setApiKey("sk_test_51IcbwgKiXDf9h9tvITOJdOcy6vMZXEHVHV0oLueO1mlFzWHHhyZ9N4gKGuHNxjQpy5tkYUkNu4UcAZwkbG9rfjT200jBnPASZD");

    $token = $_POST["stripeToken"];

    $charge = \Stripe\Charge::create([
        "amount" => 1500,
        "currency" => "brl",
        "description" => "Valor a Pagar...",
        "source" => $token
    ]);

    echo "<pre>", print_r($charge), "</pre>";
?>