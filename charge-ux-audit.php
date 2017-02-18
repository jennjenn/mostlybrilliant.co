<?php
require_once('includes/header.php');
require_once('vendor/stripe/init.php'); 

$stripe = array(
  "secret_key"      => "REDACTED",
  "publishable_key" => "pk_test_dtuTTxtSrWJjqU0RUq78pdoY"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

$token  = $_POST['stripeToken'];
$email  = $_POST['stripeEmail'];
$name   = $_POST['clientName'];

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 100000,
      'currency' => 'usd'
  ));

?>

<div class="container">
  <div class="row">
    <div class="col-xs-12">
      
		<h1>Fantastic!</h1>
	
    <p>Your UX Audit is one step closer to completion. You'll receive a confirmation email shortly with a few questions I'll need you to answer before I get started. I look forward to working together!</p>
    <p>-Jenn</p>
    
    </div>
  </div>
</div>

<?php require_once('includes/footer.php');