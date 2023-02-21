<?php

/*
Template Name: Visit
*/

get_header();

?>



<div class="hero page-hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>


<div class="intro intro-dark">
  <div class="intro-content">
    <h1 class="h1">Visit Us</h1>
    <p>Our Tasting Room is currently open Thursday through Monday from 11:00am-5:30pm.</p>
    <p>Due to limited space, we recommend scheduling an appointment for your tasting, however we do accept walk-ins based on availability.</p>
    <p>For groups larger than 6 guests, please contact us to make arrangements for your group - taste@aaronwines.com</p>
  </div>
  <div class="intro-img">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/building.jpg" alt="">
  </div>
</div>


<div class="visit-tastings">
  <div class="visit-tastings-item">
    <div class="visit-tastings-item-img">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/indoor.jpg" alt="">
    </div>
    <div class="visit-tastings-item-content">
      <h2 class="h2">Indoor Tasting</h2>
      <p>Enjoy a 60 minute tasting experience at our urban tasting room in the heart of Tin City where we will showcase our Aequorea and Aaron Wines.</p>
      <p class="visit-tastings-item-subtitle">$20 per person</p>
      <p>Waived with a 3 bottle purchase</p>
      <a href="#"class="button button-outline button-medium button-dark">Book Indoor Tasting</a>
    </div>
  </div>
  <div class="visit-tastings-item">
    <div class="visit-tastings-item-img">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/outdoor.jpg" alt="">
    </div>
    <div class="visit-tastings-item-content">
      <h2 class="h2">Outdoor Tasting</h2>
      <p>Enjoy a 60 minute tasting on our renovated outdoor patio while sipping on our current releases of Aequorea and Aaron Wines.</p>
      <p class="visit-tastings-item-subtitle">$20 per person</p>
      <p>Waived with a 3 bottle purchase</p>
      <a href="#"class="button button-outline button-medium button-dark">Book Outdoor Tasting</a>
    </div>
  </div>
</div>



<div class="visit-ohana">
  <div class="visit-ohana-intro">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/shaka.svg" alt="">
    <h2 class="h1">Ohana Tastings</h2>
    <h3 class="h3">Private Tastings in Our Ohana Room</h3>
    <p>For a more intimate experience, we offer seated tastings for groups of up to 8 guests in our private Ohana Room, by prior appointment. During this 90-minute tasting, we will guide you through a flight of current releases, along with library selections that give you a deeper dive into our history, vineyards, and winemaking.</p>
    <p>Reservations for seated tastings must be made at least 48 hours in advance.</p>
    <p class="visit-tastings-item-subtitle">$30 per person | $20 for members</p>
    <a href="#"class="button button-outline button-medium button-dark">Book Private Tasting</a>
  </div>
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/ohana-gallery.jpg" alt="" class="visit-ohana-gallery">
</div>



<?php get_footer(); ?>
