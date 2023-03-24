<?php

/*
Template Name: Visit
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
<div class="intro intro-dark visit-intro" data-scrollax-parent="true">
  <div class="intro-content">
    <h1 class="eyebrow">Join the Club</h1>
    <h1 class="h1"><?php echo $intro_title; ?></h1>
    <?php echo $intro_text; ?>
  </div>
  <div class="intro-img" data-scrollax="properties: { 'translateY': '-5vw' }">
    <img src="<?php echo $intro_image['url']; ?>" alt="<?php echo $intro_image['alt']; ?>">
  </div>
</div>



<div class="visit-tastings">
  <?php if( have_rows('tastings') ) { ?>
  <?php while ( have_rows('tastings') ) { the_row(); ?>
    <?php
      $title = get_sub_field('title');
      $text = get_sub_field('text');
      $price = get_sub_field('price');
      $deal = get_sub_field('deal');
      $tock_id = get_sub_field('tock_id');
      $image = get_sub_field('image');
    ?>
  <div class="visit-tastings-item">
    <div class="visit-tastings-item-img">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <div class="visit-tastings-item-content">
      <h2 class="h2"><?php echo $title; ?></h2>
      <?php echo $text; ?>
      <p class="visit-tastings-item-subtitle"><?php echo $price; ?></p>
      <?php if ($deal) { ?>
      <p><?php echo $deal; ?></p>
      <?php } ?>
      <div id="Tock_widget_container" data-tock-display-mode="Button" data-tock-color-mode="Blue" data-tock-locale="en-us" data-tock-timezone="America/Los_Angeles" data-tock-offering="<?php echo $tock_id; ?>"></div>
    </div>
  </div>
  <?php } ?>
  <?php } ?>
</div>



<?php
  $ohana = get_field('ohana');
  $ohana_title = $ohana['title'];
  $ohana_text = $ohana['text'];
  $ohana_price = $ohana['price'];
  $ohana_deal = $ohana['deal'];
  $ohana_tock_id = $ohana['tock_id'];
  $ohana_title = $ohana['title'];
?>
<div class="visit-ohana">
  <div class="visit-ohana-intro">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/shaka.svg" alt="">
    <h2 class="h1"><?php echo $ohana_title; ?></h2>
    <h3 class="h3"><?php echo $ohana_subtitle; ?></h3>
    <?php echo $ohana_text; ?>
    <p class="visit-tastings-item-subtitle"><?php echo $ohana_price; ?></p>
    <?php if ($deal) { ?>
    <p><?php echo $ohana_deal; ?></p>
    <?php } ?>
    <div id="Tock_widget_container" data-tock-display-mode="Button" data-tock-color-mode="Blue" data-tock-locale="en-us" data-tock-timezone="America/Los_Angeles" data-tock-offering="<?php echo $ohana_tock_id; ?>"></div>
  </div>
</div>


<!-- Gallery -->
<?php
  $gallery = get_field('gallery');
  $gallery_image_1 = $gallery['image_1'];
  $gallery_image_2 = $gallery['image_2'];
  $gallery_image_3 = $gallery['image_3'];
  $gallery_image_4 = $gallery['image_4'];
  $gallery_image_5 = $gallery['image_5'];
  $gallery_image_6 = $gallery['image_6'];
?>
<div class="visit-gallery">
  <div class="visit-gallery-item visit-gallery-item-1" data-scrollax="properties: { 'translateY': '-8vw' }">
    <img src="<?php echo $gallery_image_1['url']; ?>" alt="<?php echo $gallery_image_1['alt']; ?>">
  </div>
  <div class="visit-gallery-item visit-gallery-item-2" data-scrollax="properties: { 'translateY': '-5vw' }">
    <img src="<?php echo $gallery_image_2['url']; ?>" alt="<?php echo $gallery_image_2['alt']; ?>">
  </div>
  <div class="visit-gallery-item visit-gallery-item-5" data-scrollax="properties: { 'translateY': '-7vw' }">
    <img src="<?php echo $gallery_image_3['url']; ?>" alt="<?php echo $gallery_image_3['alt']; ?>">
  </div>
  <div class="visit-gallery-item visit-gallery-item-3" data-scrollax="properties: { 'translateY': '-3vw' }">
    <img src="<?php echo $gallery_image_4['url']; ?>" alt="<?php echo $gallery_image_4['alt']; ?>">
  </div>
  <div class="visit-gallery-item visit-gallery-item-4" data-scrollax="properties: { 'translateY': '-6vw' }">
    <img src="<?php echo $gallery_image_5['url']; ?>" alt="<?php echo $gallery_image_5['alt']; ?>">
  </div>
</div>


<!-- Skyline -->
<div class="visit-skyline">
  <img src="<?php echo $gallery_image_6['url']; ?>" alt="<?php echo $gallery_image_6['alt']; ?>">
</div>



<?php get_footer(); ?>
