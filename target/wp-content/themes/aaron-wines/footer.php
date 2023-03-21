


<?php
  $contact_info = get_field('contact_info', 32);
  $email = $contact_info['email'];
  $phone = $contact_info['phone'];
  $address = $contact_info['address'];
  $google_maps_url = $contact_info['google_maps_url'];
?>


<footer class="footer">

  <div class="footer-items">

    <div class="footer-item newsletter">
      <h1 class="newsletter-title">Stay Connected</h1>
      <p class="p1">Subscribe to our mailing list to hear about our new releases, updates from the winery and special events. No spam, just good news and even better wine.</p>

      <!-- Begin Mailchimp Signup Form -->
      <div id="mc_embed_signup">
          <form action="https://aaronwines.us3.list-manage.com/subscribe/post?u=bc551c70f09510adff5329851&amp;id=4aaddb9de6&amp;f_id=00172be3f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
              <div id="mc_embed_signup_scroll">
              
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address<span class="asterisk">*</span></label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address" required>
        <span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_bc551c70f09510adff5329851_4aaddb9de6" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Submit" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>

      <!--End mc_embed_signup-->

    </div>

    <div class="footer-item contact">
      <h1 class="footer-title">Contact Us</h1>
      <p class="p1">
        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
      </p>
    </div>

    <div class="footer-item location">
      <h1 class="footer-title">Visit Us</h1>
      <p class="p1">
        <a href="<?php echo $google_maps_url; ?>" target="_blank" class=""><?php echo $address; ?></a>
      </p>
    </div>

    <div class="footer-item club">
      <h1 class="footer-title">Members</h1>
      <div>
        <a href="https://shop.aaronwines.com/index.cfm?method=memberEditAccount.editProfile" class="button button-small button-outline button-light">Sign In</a>
        <a href="https://shop.aaronwines.com/index.cfm?method=memberCreateAccount.SignUp" class="button button-small button-outline button-light">Join</a>
      </div>
    </div>

    <div class="footer-item planet">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/1-percent-for-the-planet.svg" alt="1% For the Planet">
    </div>

  </div>

  <div class="footer-links">

    <nav class="footer-nav">
      <p>&copy; <?php echo date('Y'); ?> Aaron Wines</p>
      <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
    </nav>
    
    <ul class="social">
      <li><a href="https://www.facebook.com/AaronPetiteSirah/" target="_blank" class="facebook"></a></li>
      <li><a href="https://www.instagram.com/aaronwines/" target="_blank" class="instagram"></a></li>
    </ul>
  </div>

</footer>


<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
<script type="text/javascript" src="https://assetss3.vin65.com/js/vin65remotetools.1.1.js"></script>
<script type="text/javascript">vin65remote.cart.modalCart('https://shop.aaronwines.com',0);</script>
<script type="text/javascript">vin65remote.cart.addToCart('https://shop.aaronwines.com');</script>
<script type="text/javascript">vin65remote.product.addToCartForm('https://shop.aaronwines.com');</script>


</body>
</html>