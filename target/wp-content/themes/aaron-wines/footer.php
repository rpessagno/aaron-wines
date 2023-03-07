


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
      <div v65remotejs="form"></div>
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
<script type="text/javascript">vin65remote.form.form('https://shop.aaronwines.com','Newsletter Signup');</script>


</body>
</html>