<?php

/*
Template Name: Contact
*/

get_header();

?>



<!-- Hero -->
<?php $hero = get_field('hero'); ?>
<div class="hero page-hero contact-hero" data-scrollax-parent="true">
  <img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>


<!-- Contact Info -->
<?php
  $contact_info = get_field('contact_info');
  $email = $contact_info['email'];
  $phone = $contact_info['phone'];
  $address = $contact_info['address'];
  $google_maps_url = $contact_info['google_maps_url'];
?>
<div class="contact-intro">
  <h1 class="h1"><?php the_title(); ?></h1>
  <p>
    <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
  </p>
  <p>
    <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>
    <p>
    <a href="<?php echo $google_maps_url; ?>" target="_blank" class=""><?php echo $address; ?></a>
  </p>
</div>


<!-- Contact Form -->
<?php
  $contact_form = get_field('contact_form');
?>
<div class="contact-form">
  <div class="c7-custom-form" data-form-code="<?php echo do_shortcode($contact_form); ?>"></div>
</div>


<!-- Map -->
<?php the_field('map'); ?>


<?php get_footer(); ?>