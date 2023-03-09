<?php

/*
Template Name: Club
*/

get_header();

?>


<!-- Hero -->
<?php $hero = get_field('hero'); ?>
<div class="hero page-hero" data-scrollax-parent="true">
  <img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>



<!-- Intro -->
<?php
  $intro = get_field('intro');
  $intro_eyebrow = $intro['eyebrow'];
  $intro_title = $intro['title'];
  $intro_text = $intro['text'];
  $intro_image = $intro['image'];
?>
<div class="intro intro-dark club-intro" data-scrollax-parent="true">
  <div class="intro-content">
    <h1 class="eyebrow">Join the Club</h1>
    <h1 class="h1"><?php echo $intro_title; ?></h1>
    <?php echo $intro_text; ?>
  </div>
  <div class="intro-img" data-scrollax="properties: { 'translateY': '-5vw' }">
    <img src="<?php echo $intro_image['url']; ?>" alt="<?php echo $intro_image['alt']; ?>">
  </div>
</div>


<!-- Benefits -->
<?php
  $benefits = get_field('benefits');
  // $benefits_eyebrow = $benefits['eyebrow'];
  $benefits_title = $benefits['title'];
  $benefits_text = $benefits['text'];
  $benefits_link = $benefits['link'];
  $benefits_image = $benefits['image'];
?>
<div class="club-benefits">
  <div class="club-benefits-img">
    <img src="<?php echo $benefits_image['url']; ?>" alt="<?php echo $benefits_image['alt']; ?>">
  </div>
  <div class="club-benefits-content">
    <h2 class="h2"><?php echo $benefits_title; ?></h2>
    <?php echo $benefits_text; ?>
    <a href="<?php echo $benefits_link['url']; ?>" target="<?php echo $benefits_link['target']; ?>" class="button button-dark button-solid button-medium"><?php echo $benefits_link['title']; ?></a>
  </div>
</div>


<!-- Skyline -->
<?php
  $skyline = get_field('skyline');
?>
<div class="home-skyline">
  <img src="<?php echo $skyline['url']; ?>" alt="<?php echo $skyline['alt']; ?>">
</div>




<?php get_footer(); ?>