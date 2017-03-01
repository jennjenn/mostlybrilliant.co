<?php require_once('includes/header.php'); ?>
  
 	<div id="service-detail-page" class="container">
    	<div class="row">
    		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
    			<h1>UX Audit</h1>
                <?php // require_once('includes/promo.php'); ?>
    			<p>You have a to-do list a mile long, but don't know the best place to start.</p>
                <p>I'll do an audit of your product with a focus on user experience and usability.</p>
                <p><strong>I look for points of friction in your user experience and uncover opportunities to increase conversion, hone your messaging, strengthen your brand's voice, and eliminate visual and feature-creep-driven clutter.</strong></p>
                <p>You'll get a full report of opportunities for improvement and optimization including quick-wins and long-term strategy considerations to give your users the best experience possible, leading to increased conversion and retention, and ultimately, revenue.</p>

                <p class="price">$1000</p>
                
    			<h3>How it works:</h3>
                <p>With your key metrics in mind, I'll focus on flow, clarity, design, consistency, missing/useful functionality, overall usability, and more.</p> 
                <p>You'll receive your full custom report with opportunities for improvement and optimization including links to any resources I think may be helpful to you in further development.</p>
                <p>I'm brutally honest. I won't sugar-coat the issues I may find in your product, but I'll also provide you with tactical solutions to those issues.</p>

                <h3>Who this is for:</h3>
                <p>UX Audits can be done on <strong>desktop sites</strong>, <strong>mobile apps</strong> (iOS and Android), or <strong>tablet-focused products</strong> (iOS only).</p>
                <p>My UX Audits are focused on the overall experience of your product and the interactions your user has with it. You'll need either a live or working development site or an app that I can use as if I were a regular user.</p> 
                <p>Your product can be at any stage: brand new or established and looking improve. The ideal case for a UX Audit is when you have a live product and are looking to improve or optimize a particular area of that product. Landing pages, E-Commerce flows, Onboarding, or anywhere else your users may be getting stuck.</p>

                <h3>Why you need a UX Audit:</h3>
                <p>We all get caught up in building the "new." Need a new feature or page? Throw it into the top nav and call it day. Need an alert box to remind your users of something urgent? Throw it onto the site header and call it a day. Introducing a new action or color or theme? Throw it in there and move on.</p>

                <p>We get so caught up in moving forward and patching on new features, tools, copy, experiments, etc., that we often forget to take a step back and evaluate what it does the product as a whole.</p>

                <p>We do so much patching that sometimes the overall message gets lost. Or worse: the user gets lost. The information architecture we spent so much time defining in the very beginning has come to resemble an mc escher work rather than a user-friendly, optimized experience that ushers our users from the very start to their end goal.</p>

                <p>It's death by a thousand papercuts.</p>

                <p>UX Audits are the perfect way to take that step back and evaluate what stands to be improved in the overall experience. In a few-hour deep-dive into your product experience, you can uncover all of those points of friction or confusion for your users, develop a plan to address them, and make it a priority to get the fixes out ASAP.</p>

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
            <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <script src="https://js.stripe.com/v3/"></script>
              <form action="/order-ux-audit" method="post" id="payment-form">
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
                <button type="submit">Order Your UX Audit &mdash; $1000</button>
                <div class="outcome">
                  <div id="card-errors"></div>
                </div>
              </form>
            </div>
        </div>
	</div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <h3>Guarantee</h3>
            <p>I'm positive you're going to get incredible value out of your UX Audit, but if you're unsatisfied, you can request a full refund within 30 days.</p>
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
    <div id="sign-up-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <!-- Begin MailChimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                    <div id="mc_embed_signup" class="live-stream-form col-xs-12 col-sm-10 col-sm-offset-1">
                    <h4>Want to try some DIY first?</h4>
                    <p class="intro">Every month I do a livestreamed <a href="/live-design-audit">abbreviated UX Audit</a> where I demo the process on 3-5 submitted sites and answer your questions in real time, free!</p>
                    <p>Join the next session:</p>
                      <form action="//mostlybrilliant.us13.list-manage.com/subscribe/post?u=4cca0202faa1d268df2007d72&amp;id=be387c1a0a&SOURCE=live-audit" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                          <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4cca0202faa1d268df2007d72_be387c1a0a" tabindex="-1" value=""></div>
                          <div class="clear"><input type="submit" value="Sign me up!" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                      </form>
                    </div>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>  
        </div>
    </div>
	
<?php require_once("includes/footer.php"); ?>