<?php

/*
Template Name: Home
*/

get_header();

?>

<div class="hero" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/hero-2.jpg');"></div>

<div class="home-overview">

  <div class="home-intro">
    <div class="home-intro-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/shaka.svg" alt="" class="home-intro-icon">
      <h1 class="home-intro-title"><?php the_field('intro_headline'); ?></h1>
      
      <p>The Central Coast is our home. It was the waters of the Pacific Ocean and the forests of the Santa Lucia Mountains that nurtured our spirit and drove us to create wines from our backyard. We’ve always sought inspiration in unlikely places, which has led us to produce wines that break from conventionality. Petite Sirah-driven wines from the steep hillsides of west Paso Robles, and single vineyard Pinot Noirs from the extremes of the San Luis Obispo Coast.</p>

      <p>Today we celebrate over 20 years of doing what we love in the place we’ve always called home, and sharing with others. We wouldn’t have it any other way.</p>

      <p>Cheers,<br>
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-jackson-signature.png" alt="Aaron Jackson" class="home-intro-signature">
      </p>

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
          <p>Petite Syrah and Rhone blends <br>
            + <br>
          Paso Robles AVA</p>
        </div>
        <div class="home-shop-content-item">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-white.svg" alt="Aequorea">
          <p>Aeromatic whites and Pinot Noirs <br>
            + <br>
          SLO Coast AVA</p>
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
      <p>Visit our winery & tasting room to experience our current release wines. We are open for walk-ins and reservations Thursday through Monday.</p>
      <a href="<?php echo the_permalink('30'); ?>" class="button button-medium button-outline button-dark">Visit Us</a>
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
    <p>Tin City is  just a few minutes from downtown Paso Robles. You’ll get to meet our small team (there’s just 4 of us!) and experience our wines just a few steps from where they are produced. Afterward, you can wander through the Tin City community to meet other artisans making some of the most delicious things on the Central Coast.</p>
    <a href="#" class="button button-medium button-outline button-light">Learn More</a>
  </div>
</div>


<div class="home-club-winemaker">

  <div class="feature home-club">
    <div class="feature-content alt">
      <h2 class="h2">Join Our <br> Wine Club</h2>
      <p>If you love our wines as much as we do, we invite you to join our wine club and become a part of our family. Every Fall and Spring, you will receive a shipment of our newest wines, before they are released to the public.</p>
      <a href="<?php echo the_permalink('28'); ?>" class="button button-medium button-outline button-dark">Join Now</a>
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
        <cite><span>Aaron Jackson</span> <br> Owner & Winemaker</cite>
      </blockquote>
    </div>
  </div>

</div>

<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/celebration.jpg" alt="Celebration">
</div>

<?php get_footer(); ?>