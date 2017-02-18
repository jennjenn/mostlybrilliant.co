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

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 20000,
      'currency' => 'usd'
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