<?php
require_once('includes/header.php');
require_once('vendor/stripe/init.php'); 

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
if(!empty($_POST)){

  \Stripe\Stripe::setApiKey("REDACTED");

  // Token is created using Stripe.js or Checkout!
  // Get the payment token submitted by the form:
  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $name   = $_POST['clientName'];

  // Create a Customer:
  $customer = \Stripe\Customer::create(array(
    "email" => $email,
    "source" => $token,
    "metadata" => array("customer_name" => $name),
  ));

  // Charge the Customer instead of the card:
  $charge = \Stripe\Charge::create(array(
    "amount" => 100000,
    "currency" => "usd",
    "customer" => $customer->id,
    "metadata" => array("product" => "UX Audit"),
  ));

}else{
  //TODO redirect
}
?>

<div id="order-success" class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      
    <h1>Fantastic!</h1>
  
    <p>Your UX Audit is one step closer to completion. You'll receive a confirmation email shortly with a few questions I'll need you to answer before I get started. I look forward to working together! -Jenn</p>
    
    </div>
  </div>
</div>

<?php require_once('includes/footer.php');