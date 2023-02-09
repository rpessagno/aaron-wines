<?php

/*
Template Name: Home
*/

get_header();

?>

<div class="hero home-hero" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/hero-2.jpg');"></div>

<div class="home-intro">

  <div class="intro">
    <div class="intro-content">
      <h1 class="home-intro-title"><?php the_field('intro_headline'); ?></h1>
      <p class="intro-text"><?php the_field('intro_text'); ?></p>
    </div>
  </div>

  <div class="home-shop">
    <div class="home-shop-items">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aaron-Bottle-Shot-Trespasser-Detail.png">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aequorea-Bottle-Shot-Pinot-Noir-Seafarer-Detail.png">
      <img src="https://shop.aaronwines.com/assets/images/products/pictures/Aequorea-Bottle-Shot-Pinot-Gris-Detail-IUEEGM.png">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aaron-Bottle-Shot-Trespasser-Detail.png">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aequorea-Bottle-Shot-Pinot-Noir-Derby-Detail.png">
      <img src="https://shop.aaronwines.com/assets/images/products/pictures/Aequorea-Bottle-Shot-Pinot-Gris-Detail-IUEEGM.png">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aaron-Bottle-Shot-Trespasser-Detail.png">
      <img src="https://aaronwines.com/wp-content/uploads/2019/05/Aequorea-Bottle-Shot-Pinot-Noir-Seafarer-Detail.png">
      <img src="https://shop.aaronwines.com/assets/images/products/pictures/Aequorea-Bottle-Shot-Pinot-Gris-Detail-IUEEGM.png">
    </div>
    <div class="home-shop-content">
      <div class="home-shop-content-items">
        <div class="home-shop-content-item">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-white.svg" alt="Aaron">
          <p>Aeromatic whites and Pinot Noirs <br>
          SLO Coast AVA</p>
        </div>
        <div class="home-shop-content-item">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-white.svg" alt="Aequorea">
          <p>Petite Syrah and Rhone blends <br>
          Paso Robles AVA</p>
        </div>
        <a href="#" class="home-shop-content-link">Shop <br> Wines</a>
      </div>
    </div>
  </div>

</div>

<div class="feature-wrap home-features">

<!--   <div class="feature home-aaron">
    <div class="feature-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="feature-logo">
      <p><?php the_field('aaron_text'); ?></p>
      <a href="<?php echo the_permalink('5'); ?>" class="button">View Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('aaron_image'); ?>');"></div>
  </div>

  <div class="feature home-aequorea">
    <div class="feature-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aequorea" class="feature-logo">
      <p><?php the_field('aequorea_text'); ?></p>
      <a href="<?php echo the_permalink('7'); ?>" class="button">View Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('aequorea_image'); ?>');"></div>
  </div> -->

  <div class="feature home-visit">
    <div class="feature-content">
      <h2 class="h2">Visit Our <br> Tasting Room</h2>
      <p><?php the_field('visit_text'); ?></p>
      <a href="<?php echo the_permalink('30'); ?>" class="button-outline button-dark">Visit Us</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/visit.jpg');"></div>
  </div>

<!--   <div class="feature home-club">
    <div class="feature-content">
      <h3 class="title"><?php the_field('club_title'); ?></h3>
      <p><?php the_field('club_text'); ?></p>
      <a href="<?php echo the_permalink('28'); ?>" class="button">Learn More</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('club_image'); ?>');"></div>
  </div> -->

</div>

<div class="home-map">
  <div class="home-map-content">
    <h2 class="h1">In the Heart <br> of Tin City</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum et vitae eveniet necessitatibus, nesciunt, consequatur, aspernatur error iusto quis atque, architecto veritatis harum molestias sit. Cumque debitis molestias, voluptates quibusdam.</p>
    <a href="#" class="button-outline button-light">Learn More</a>
  </div>
</div>


<div class="home-club-winemaker">

  <div class="feature home-club">
    <div class="feature-content alt">
      <h2 class="h2">Join Our <br> Wine Club</h2>
      <p>If you love our wines as much as we do, we invite you to join our wine club and become a part of our family. Every six months, you’ll receive a shipment of our new wines, before they are released to the public.</p>
      <a href="<?php echo the_permalink('28'); ?>" class="button-outline button-dark">Join Now</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/club.jpg');"></div>
  </div>


  <div class="home-winemaker">
    <div class="home-winemaker-wrap">
      <div class="home-winemaker-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/aaron-surfboard.jpg" alt="Aaron with surfboard">
      </div>
      <blockquote class="home-winemaker-content">
        <p>My wines are like my love letters to the Central Coast.</p>
        <p>Everytime I create one, it’s me feeling prideful and honoring the place where I grew up.</p>
        <cite><span>Aaron Jackson</span> <br> Owner / Winemaker</cite>
      </blockquote>
    </div>
  </div>

</div>

<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/celebration.jpg" alt="Celebration">
</div>

<?php get_footer(); ?>