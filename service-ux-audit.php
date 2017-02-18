<?php require_once('includes/header.php'); ?>
  
 	<div id="service-single" class="container service-detail-page">
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    			<h1>UX Audit</h1>
    			<p>Congrats! Your site or app is out in the world! But what's next? You have a to-do list a mile long, but don't know the best place to start.</p>
                <p>I'll do an audit of your product with a focus on user experience and usability. You'll get a report of <strong>at least 15 prioritized opportunities for improvement and optimization</strong> to give your users the best experience possible, leading to increased conversion and retention.</p>

                <p class="price">$1000 for up to 10 key views.</p>
                
    			<h3>How it works:</h3>
                <p>With your key metrics in mind, I'll focus on flow, clarity, design, consistency, missing/useful functionality, overall usability, and more.</p> 
                <p>You'll receive your custom report with at least 15 opportunities for improvement and optimization including links to any resources I think may be helpful to you in further development.</p>
                <p>I'm brutally honest. I won't sugar-coat the issues I may find in your product, but I'll also provide you with tactical solutions to those issues.</p>

                <h3>Who this is for:</h3>
                <p>UX Audits can be done on <strong>desktop sites</strong>, <strong>mobile apps</strong> (iOS and Android), or <strong>tablet-focused products</strong> (iOS only).</p>
                <p>My UX Audits are focused on the overall experience of your product and the interactions your user has with it. You'll need either a live or working development site or an app that I can use as if I were a regular user.</p> 
                <p>Your product can be at any stage: brand new or established and looking improve. The ideal case for a UX Audit is when you have a live product and are looking to improve or optimize a particular area of that product. Landing pages, E-Commerce flows, Onboarding, or anywhere else your product may have some points of friction.</p>

                <h3>What Others have said:</h3>
                <div class="review">
                    <div class="review-img"><img src="img/feedbuddy.png" alt="John Casano, Feed-Buddy.io" /></div>
                    <div class="review-text">
                        Jennifer knows her stuff. She is friendly, but not afraid to tell you what is wrong with your work. She is able to break down a page, flow, or design element and provide concrete feedback on what does not work, why, and exactly what can be done to make things better. Highly recommended.
                      <div class="attribution">- John Casano, <a href="http://feed-buddy.io" target="_blank">feed-buddy.io</a></div>
                    </div>
                </div>
                <div class="review">
                    <div class="review-img"><img src="img/kk-photo.jpg" alt="Kate Kendall, CloudPeeps.com" /></div>
                    <div class="review-text">
                      Had a brilliant UX audit done by @jennjenn. Founders/creators: recommend you check out her UX service
                      <div class="attribution">- Kate Kendall, <a href="http://cloudpeeps.com" target="_blank">CloudPeeps.com</a></div>
                    </div>
                </div>
                
                <h3>Get Started</h3>
                <p>UX Audits can be booked instantly. After your payment is processed, you'll receive an email asking for a few bits of info and we're good to go. It's that simple.</p>
                <p>Turnaround time for your UX Audit: 2-3 business days.</p>
                
    		</div>
    	</div>
    	<div class="row payment-button">
    		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
                <script src="https://js.stripe.com/v3/"></script>

                <form action="/order-ux-audit" method="post" id="payment-form" class="form-group">
                  <div class="form-row">
                    <label for="card-element">
                      Enter your credit or debit card:
                    </label>
                    <div id="card-element">
                      <!-- a Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors -->
                    <div id="card-errors"></div>
                  </div>

                  <button>Submit Payment</button>
                </form>
    		</div>
		</div>
	</div>
	
<?php require_once("includes/footer.php"); ?>