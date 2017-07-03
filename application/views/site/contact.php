<!-- Subscribe Section -->
<section id="subscribe-section" class="subscribe-section text-center">
  <div class="container">
    <form class="news-letter" method="post">
      <p class="alert-success"></p>
      <p class="alert-warning"></p>

      <div class="subscribe-hide">
        <input class="form-control" type="email" id="subscribe-email" name="subscribe-email" placeholder="Email Address"  required>
        <button  type="submit" id="subscribe-submit" class="btn btn-md">Subscribe</button>
        <div class="subscribe-error"></div>
      </div><!-- /.subscribe-hide -->
      <div class="subscribe-message"></div>
    </form><!-- /.news-letter -->
  </div><!-- /.container -->
</section><!-- /#subscribe-section -->
<!-- Subscribe Section End -->




<section id="contact" class="contact">
  <div class="contact-area">
    <!-- Google Map Section -->
    <div id="google-map" class="google-map">
      <div class="map-container">
        <div id="googleMaps" class="google-map-container">
        </div>
      </div><!-- /.map-container -->
    </div><!-- /#google-map-->
    <!-- Google Map Section End -->

    <div id="message-details" class="message-details">
      <div class="container">
        <form action="<?php echo base_url();?>application/views/site/email.php" method="post" id="myForm" class="message-form">
          <div class="row">
            <div class="col-sm-6">
              <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true" placeholder="Name*" title="Name" required>
              <input id="email" class="form-control" name="email" type="email" value="" size="30" aria-required="true" placeholder="Email*" title="Email"  required>
              <input id="subject" class="form-control" name="subject" type="subject" value="" size="30" aria-required="true" placeholder="Subject*" title="Subject"  required>
            </div>
            <div class="col-sm-6">
              <textarea id="message" class="form-control" name="message" cols="45" rows="3" aria-required="true" placeholder="Message" title="Message"  required></textarea>
              <button name="submit" class="btn btn-lg full-width" type="submit" id="submit">Submit</button>
            </div>
          </div><!-- /.row -->
        </form><!-- /#commentform -->
      </div><!-- /.container -->
    </div><!-- /.message-details -->
  </div><!-- /.contact-area -->
</section><!-- /#contact -->
