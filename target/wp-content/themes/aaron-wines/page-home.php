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

<div class="feature-wrap">
  <div class="feature">
    <div class="feature-content">
      <h3 class="subtitle"><?php the_field('aaron_title'); ?></h3>
      <p><?php the_field('aaron_text'); ?></p>
      <a href="#" class="button">Explore Aaron Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h3 class="subtitle"><?php the_field('aequorea_title'); ?></h3>
      <p><?php the_field('aequorea_text'); ?></p>
      <a href="#" class="button">Explore Aequorea Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
</div>

<div class="intro home-experience">
  <h2 class="title">Experience</h2>
  <div class="home-experience-items">
    <div class="home-experience-item">
      <img src="<?php the_field('club_image'); ?>">
      <h3 class="subtitle">Wine Club</h3>
      <p><?php the_field('club_text'); ?></p>
      <a href="" class="button">Learn More</a>
    </div>
    <div class="home-experience-item">
      <img src="<?php the_field('visit_image'); ?>">
      <h3 class="subtitle">Visit</h3>
      <p><?php the_field('visit_text'); ?></p>
      <a href="" class="button">Learn More</a>
    </div>
  </div>
</div>

<?php get_footer(); ?>