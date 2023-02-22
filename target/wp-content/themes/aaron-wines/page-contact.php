<?php

/*
Template Name: Contact
*/

get_header();

?>




<div class="hero page-hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<?php
  $contact_form = get_field('contact_form');
?>

<div class="contact-intro">
  <h1 class="h1">Contact Us</h1>
  <p><?php the_field('intro'); ?></p>
</div>

<div class="contact-form">
  <?php echo do_shortcode($contact_form); ?>
</div>

<?php the_field('map'); ?>


<?php get_footer(); ?>