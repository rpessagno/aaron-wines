<?php

/*
Template Name: Home
*/

get_header();

?>

<div class="hero home-hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="intro">
  <h1 class="headline"><?php the_field('intro_headline'); ?></h1>
  <p><?php the_field('intro_text'); ?></p>
</div>

<div class="feature-wrap home-features">
  <div class="feature feature-wide home-aaron">
    <div class="feature-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="feature-logo">
      <p><?php the_field('aaron_text'); ?></p>
      <a href="<?php echo the_permalink('5'); ?>" class="button">View Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('aaron_image'); ?>');"></div>
  </div>
  <div class="feature feature-wide home-aequorea">
    <div class="feature-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aequorea" class="feature-logo">
      <p><?php the_field('aequorea_text'); ?></p>
      <a href="<?php echo the_permalink('7'); ?>" class="button">View Wines</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('aequorea_image'); ?>');"></div>
  </div>
  <div class="feature feature-wide home-visit">
    <div class="feature-content">
      <h3 class="title"><?php the_field('visit_title'); ?></h3>
      <p><?php the_field('visit_text'); ?></p>
      <a href="<?php echo the_permalink('30'); ?>" class="button">Visit Us</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('visit_image'); ?>');"></div>
  </div>
  <div class="feature feature-wide home-club">
    <div class="feature-content">
      <h3 class="title"><?php the_field('club_title'); ?></h3>
      <p><?php the_field('club_text'); ?></p>
      <a href="<?php echo the_permalink('28'); ?>" class="button">Learn More</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('club_image'); ?>');"></div>
  </div>
</div>

<?php get_footer(); ?>