<?php

/*
Template Name: Home
*/

get_header();

?>

<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="intro">
  <h1 class="headline"><?php the_field('intro_headline'); ?></h1>
  <p><?php the_field('intro_text'); ?></p>
</div>

<div class="feature-wrap home-features">
  <div class="feature feature-wide home-aaron">
    <div class="feature-content">
      <h3 class="title"><?php the_field('aaron_title'); ?></h3>
      <p><?php the_field('aaron_text'); ?></p>
      <a href="#" class="button">Shop Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/aaron.jpg');"></div>
  </div>
  <div class="feature feature-wide home-aequorea">
    <div class="feature-content">
      <h3 class="title"><?php the_field('aequorea_title'); ?></h3>
      <p><?php the_field('aequorea_text'); ?></p>
      <a href="#" class="button">Shop Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/aequorea.jpg');"></div>
  </div>
  <div class="feature feature-wide home-tasting">
    <div class="feature-content">
      <h3 class="title"><?php the_field('visit_title'); ?></h3>
      <p><?php the_field('visit_text'); ?></p>
      <a href="#" class="button">Visit Us</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/tasting-room.jpg');"></div>
  </div>
  <div class="feature feature-wide home-club">
    <div class="feature-content">
      <h3 class="title"><?php the_field('club_title'); ?></h3>
      <p><?php the_field('club_text'); ?></p>
      <a href="#" class="button">Learn More</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/wine-club.jpg');"></div>
  </div>
</div>

<?php get_footer(); ?>