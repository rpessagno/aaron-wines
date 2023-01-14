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
      <h1 class="headline"><?php the_field('intro_headline'); ?></h1>
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
    </div>
    <div class="home-shop-link">
      <a href="#">Shop Wines</a>
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
      <h3 class="subtitle"><?php the_field('visit_title'); ?></h3>
      <p><?php the_field('visit_text'); ?></p>
      <a href="<?php echo the_permalink('30'); ?>" class="button">Visit Us</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('visit_image'); ?>');"></div>
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
    <h1 class="headline">We're in Tin City</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum et vitae eveniet necessitatibus, nesciunt, consequatur, aspernatur error iusto quis atque, architecto veritatis harum molestias sit. Cumque debitis molestias, voluptates quibusdam.</p>
    <a href="#" class="button">Get in Touch</a>
  </div>
</div>


<div class="feature-wrap home-features">

  <div class="feature home-club">
    <div class="feature-content alt">
      <h3 class="subtitle"><?php the_field('club_title'); ?></h3>
      <p><?php the_field('club_text'); ?></p>
      <a href="<?php echo the_permalink('28'); ?>" class="button">Learn More</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('club_image'); ?>');"></div>
  </div>

</div>


<div class="home-winemaker">
  <div class="home-winemaker-wrap">
    <div class="home-winemaker-img">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/aaron-surfboard.jpg" alt="Aaron with surfboard">
    </div>
    <blockquote class="home-winemaker-content">
      <p>&ldquo;My wines are like my love letters to the Central Coast.</p>
      <p>Everytime I create one, it’s me feeling prideful and honoring the place where I grew up.&rdquo;</p>
      <cite><span>Aaron Jackson</span> <br> Owner / Winemaker</cite>
    </blockquote>
  </div>
</div>

<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/celebration.jpg" alt="Celebration">
</div>

<?php get_footer(); ?>