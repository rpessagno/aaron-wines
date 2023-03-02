<?php

/*
Template Name: Contact
*/

get_header();

?>




<div class="hero page-hero contact-hero" data-scrollax-parent="true">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/contact/hero.jpg" alt="" data-scrollax="properties: { 'translateY': '10vw' }">
</div>

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