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

    <?php if( have_rows('benefits') ) { ?>
    <?php while ( have_rows('benefits') ) { the_row(); ?>
      <?php
        $text = get_sub_field('text');
        $icon = get_sub_field('icon');
      ?>

    <div class="club-benefits-item">
      <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
      <p class="description"><?php echo $text; ?></p>
    </div>

    <?php } ?>
    <?php } ?>
    
    </div>
  </div>
</div>


<!-- CTA -->
<?php
  $cta = get_field('cta');
  $cta_title = $cta['title'];
  $cta_link = $cta['link'];
?>
<div class="club-cta">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/shaka.svg" alt="shaka icon" class="club-cta-icon">
  <h1 class="club-cta-title"><?php echo $cta_title; ?></h1>
  <a href="<?php echo $cta_link['url']; ?>" target="<?php echo $cta_link['target']; ?>" class="button button-large button-solid button-dark"><?php echo $cta_link['title']; ?></a>
</div>


<!-- Skyline -->
<?php
  $skyline = get_field('skyline');
?>
<div class="home-skyline club-skyline">
  <img src="<?php echo $skyline['url']; ?>" alt="<?php echo $skyline['alt']; ?>">
</div>


<!-- Events -->
<div class="club-events">

  <?php
    $events_header = get_field('events_header');
    $events_title = $events_header['title'];
    $events_text = $events_header['text'];
  ?>
  <div class="club-events-header">
    <h1 class="h1"><?php echo $events_title; ?></h1>
    <p><?php echo $events_text; ?></p>
  </div>
  <div class="club-events-items">

    <?php if( have_rows('events') ) { ?>
    <?php while ( have_rows('events') ) { the_row(); ?>
    <?php
      $title = get_sub_field('title');
      $start_date = get_sub_field('start_date');
      $end_date = get_sub_field('end_date');
      $start_time = get_sub_field('start_time');
      $end_time = get_sub_field('end_time');
      $link = get_sub_field('link');
      $image = get_sub_field('image');
    ?>

    <div class="club-events-item">
      <div class="club-events-item-img"><img src="<?php echo $image['url']; ?>" alt="<?php echo $imahe['alt']; ?>"></div>
      <div class="club-events-item-content">
        <h3 class="h3"><?php echo $title; ?></h3>
        <p class="p1">
          <?php if ($start_date) { echo $start_date; } ?>
          <?php if ($start_date && $end_date) { echo ' – ' . $end_date; } ?>
          <?php if ($start_time) { echo '<br>' . $start_time; } ?>
          <?php if ($start_time && $end_time) { echo ' – ' . $end_time; } ?>
        </p>
        <?php if ($link) { ?>
        <a href="<?php echo $link['url']; ?>" target="_blank" class="button button-small button-outline button-dark"><?php echo $link['title']; ?></a>
        <?php } ?>
      </div>
    </div>

    <?php } ?>
    <?php } ?>

  </div>
</div>



<?php get_footer(); ?>