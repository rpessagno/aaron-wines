




<footer class="footer">

  <div class="footer-items">

    <div class="footer-item newsletter">
      <h1 class="footer-title">Join Our Mailing List</h1>
      <p class="text">Sign up for our monthly emails for special access to our limited releases.</p>
      <div v65remotejs="form"></div>
    </div>

    <div class="footer-item contact">
      <h1 class="footer-title">Contact Us</h1>
      <p class="text">
        <a href="tel:805.369.2037" class="no-underline">805.369.2037</a><br>
        <a href="mailto:info@aaronwines.com" class="no-underline">info@aaronwines.com</a>
      </p>
    </div>

    <div class="footer-item location">
      <h1 class="footer-title">Visit Us</h1>
      <p class="text">
        3050 Limestone Way <br>
        Paso Robles, CA 93446
      </p>
    </div>

    <div class="footer-item club">
      <h1 class="footer-title">Members</h1>
      <p class="text">
        <a href="https://shop.aaronwines.com/index.cfm?method=memberEditAccount.editProfile" class="button button-small button-outline button-light">Sign In</a>
        <a href="https://shop.aaronwines.com/index.cfm?method=memberCreateAccount.SignUp" class="button button-small button-outline button-light">Join</a></p>
    </div>

    <div class="footer-item planet">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/1-percent-for-the-planet.svg" alt="1% For the Planet">
    </div>

  </div>

  <div class="footer-links">

    <ul class="footer-copyright">
      <li>&copy <?php echo date('Y'); ?> Aaron Wines</li>
      <li>Privacy Policy</li>
      <li>Terms</li>
    </ul>
    
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