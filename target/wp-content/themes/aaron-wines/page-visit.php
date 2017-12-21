<?php

/*
Template Name: Visit
*/

get_header();

?>



<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>



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
  <h2 class="title">Request a Tasting Appointment</h2>
  <p class="text"><?php the_field('contact_intro'); ?></p>
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="51"]'); ?>
  </div>
</div>

<?php get_footer(); ?>