<?php

/*
Template Name: Club
*/

get_header();

?>




<div class="hero"></div>


<div class="feature-wrap">
  <div class="feature">
    <div class="feature-content">
      <h3 class="subtitle"><?php the_field('intro_title'); ?></h3>
      <p><?php the_field('intro_text'); ?></p>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('intro_image'); ?>');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h3 class="subtitle"><?php the_field('details_title'); ?></h3>
      <p><?php the_field('details_text'); ?></p>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('detail_image'); ?>');"></div>
  </div>
</div>


<div class="intro">
  <div data-vsPlugin="clubSignup"></div>
</div>

<?php get_footer(); ?>