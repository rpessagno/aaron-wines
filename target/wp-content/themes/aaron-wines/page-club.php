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

<div class="club-overview">
  <div class="club-intro">
    <div class="home-intro-content">
      <h1 class="h1"><?php echo $intro_title; ?></h1>
      <?php echo $intro_text; ?>
    </div>
  </div>
</div>



<!-- Benefits -->

<div class="club-benefits">
  <div class="club-benefits-items">
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/1.svg" alt="">
      <p class="h4">6 bottles of wine 2x per year,
in April and November</p>
    </div>
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/2.svg" alt="">
      <p class="h4">20% discount on all club
shipments and wine purchases</p>
    </div>
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/3.svg" alt="">
      <p class="h4">First access to new releases,
before they go public</p>
    </div>
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/4.svg" alt="">
      <p class="h4">Annual allocation of
our small production wines</p>
    </div>
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/5.svg" alt="">
      <p class="h4">Complimentary tasting for
you and 3 guests at the winery</p>
    </div>
    <div class="club-benefits-item">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/6.svg" alt="">
      <p class="h4">Membership is free and
can be cancelled at any time</p>
    </div>
  </div>
</div>

<div class="club-cta">
  <h1 class="h1">Ready to join the <br> Aaron Wines family?</h1>
  <a href="#" class="button button-large button-solid button-dark">Join Now</a>
</div>


<!--
<?php
  $benefits = get_field('benefits');
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
-->

<!-- Skyline -->
<?php
  $skyline = get_field('skyline');
?>
<div class="home-skyline">
  <img src="<?php echo $skyline['url']; ?>" alt="<?php echo $skyline['alt']; ?>">
</div>




<?php get_footer(); ?>