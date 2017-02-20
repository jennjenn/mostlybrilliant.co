<?php require_once('includes/header.php'); ?>
  
 	<div id="service-detail-page" class="container">
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    			<h1>60-minute Consult Call</h1>
    			<p>Need to bounce your plans or ideas before you commit to a path? Need a quick review of a new element before you push it to production? Just want to pick my brain? Let's hop on a call or screen share and dive into your concerns. By the end of the hour, you'll have an actionable plan for moving forward. And hopefully fewer things to worry about.</p>
                
    			<h3>How it works:</h3>
                <ul>
                <li>We'll have a 60-minute call or screenshare via Uberconference.</li>
                <li>I'll follow up via email with key points from our call so you don't have to worry about taking notes.</li>
                <li>Prosper.</li>
                </ul>

                <h3>Get Started</h3>
                <p>Consult calls can be booked instantly for $200. After your payment is processed, you'll be able to select a time for your call and receive instructions for dialing in. It's that simple.</p>     
    	   </div>
    	</div>
    	<div class="row payment-button">
    		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <script src="https://js.stripe.com/v3/"></script>
              <form action="/order-call" method="post" id="payment-form">
                <div class="group">
                    <label>
                        <span>Full Name:</span>
                        <input class="field" id="clientName" name="clientName" placeholder="Jane Doe" type="text" />
                    </label>
                    <label>
                        <span>Email:</span>
                        <input class="field" id="stripeEmail" name="stripeEmail" placeholder="you@awesome.com" type="email" />
                    </label>
                </div>
                <div class="group">
                  <label>
                    <span>Card</span>
                    <div id="card-element" class="field"></div>
                  </label>
                </div>
                <button type="submit">Schedule Call</button>
                <div class="outcome">
                  <div id="card-errors"></div>
                </div>
              </form>
    		</div>
		</div>
	</div>
    <div class="alt-blue-section">
        <div class="container">
            <div class="row button-full">
                <div class="col-xs-12">
                    <a href="/services" class="button button-alt">&larr; More Services</a>
                </div>
            </div>
        </div>
    </div>
	
<?php require_once("includes/footer.php"); ?>