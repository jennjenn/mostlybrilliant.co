<?php
require_once('includes/header.php');
require_once('vendor/stripe/init.php'); 

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("REDACTED");

print_r($_POST);
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
  "amount" => 20000,
  "currency" => "usd",
  "customer" => $customer->id,
  "metadata" => array("product" => "60-min Consult Call"),
));
?>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      
		<h1>Fantastic!</h1>
	
    <p>Now all that's left to do is pick a time that works best for you. I look forward to our call!</p>
    <p>-Jenn</p>
    
    <iframe src="https://calendly.com/mostlybrilliant/60-min-consult-call"></iframe>
    </div>
  </div>
</div>

<?php require_once('includes/footer.php');