<?php

/*
Template Name: Visit
*/

get_header();

?>



<div class="hero visit-hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>



<div class="feature-wrap">

  <?php if( have_rows('details') ) { ?>
  <?php while ( have_rows('details') ) { the_row(); ?>

    <div class="feature">
      <div class="feature-content">
        <h3 class="subtitle"><?php the_sub_field('title'); ?></h3>
        <p><?php the_sub_field('text'); ?></p>
      </div>
      <div class="feature-img" style="background-image: url('<?php the_sub_field('image'); ?>');"></div>
    </div>

  <?php } ?>
  <?php } ?>

</div>


<div class="intro">
  <h2 class="title">Request a Tasting Appointment</h2>
  <p class="text"><?php the_field('contact_intro'); ?></p>
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="51"]'); ?>
  </div>
</div>

<?php get_footer(); ?>
