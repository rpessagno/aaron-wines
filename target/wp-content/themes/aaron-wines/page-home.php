<?php

/*
Template Name: Home
*/

get_header();

?>


<!-- Hero -->
<?php $hero = get_field('hero'); ?>
<div class="hero" data-scrollax-parent="true">
  <img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>


<!-- Overview -->
<div class="home-overview" data-scrollax-parent="true">

  <!-- Intro -->
  <?php
    $intro = get_field('intro');
    $intro_title = $intro['title'];
    $intro_text = $intro['text'];
  ?>
  <div class="home-intro" data-scrollax="properties: { 'translateY': '-10vw' }">
    <div class="home-intro-content">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/visit/shaka.svg" alt="" class="home-intro-icon">
      <h1 class="home-intro-title"><?php echo $intro_title; ?></h1>
      <?php echo $intro_text; ?>
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-jackson-signature.png" alt="Aaron Jackson" class="home-intro-signature">
    </div>
  </div>

  <!-- Bottles -->
  <div class="home-shop">
    <div class="home-shop-items">
      <?php if( have_rows('bottles') ) { ?>
      <?php while ( have_rows('bottles') ) { the_row(); ?>
      <?php $image = get_sub_field('image'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      <?php } ?>
      <?php } ?>
    </div>


    <!-- Shop -->
    <?php
      $shop = get_field('shop');
      $aaron_logo = $shop['aaron_logo'];
      $aaron_text = $shop['aaron_text'];
      $aequorea_logo = $shop['aequorea_logo'];
      $aequorea_text = $shop['aequorea_text'];
    ?>
    <div class="home-shop-content">
      <div class="home-shop-content-items">
        <div class="home-shop-content-item">
          <img src="<?php echo $aaron_logo['url']; ?>" alt="<?php echo $aaron_logo['alt']; ?>">
          <p><?php echo $aaron_text; ?></p>
        </div>
        <div class="home-shop-content-item">
          <img src="<?php echo $aequorea_logo['url']; ?>" alt="<?php echo $aequorea_logo['alt']; ?>">
          <p><?php echo $aequorea_text; ?></p>
        </div>
        <a href="#" class="home-shop-content-link">Shop <br> Wines</a>
      </div>
    </div>
  </div>

</div>


<!-- Visit -->
<?php
  $visit = get_field('visit');
  $visit_title = $visit['title'];
  $visit_text = $visit['text'];
  $visit_link = $visit['link'];
  $visit_image = $visit['image'];
?>
<div class="feature home-visit">
  <div class="feature-content">
    <h2 class="h2"><?php echo $visit_title; ?></h2>
    <?php echo $visit_text; ?>
    <a href="<?php echo $visit_link['url']; ?>" target="<?php echo $visit_link['target']; ?>" class="button button-medium button-outline button-dark"><?php echo $visit_link['title']; ?></a>
  </div>
  <div class="feature-img" data-scrollax-parent="true">
    <img src="<?php echo $visit_image['url']; ?>" alt="<?php echo $visit_image['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
  </div>
</div>

<!-- Tin City -->
<?php
    $tin_city = get_field('tin_city');
    $tin_city_title = $tin_city['title'];
    $tin_city_text = $tin_city['text'];
    $tin_city_link = $tin_city['link'];
    $tin_city_image = $tin_city['image'];
  ?>
<div class="home-map" data-scrollax-parent="true">
  <div class="home-map-content" data-scrollax="properties: { 'translateY': '5vw' }">
    <h2 class="h1"><?php echo $tin_city_title; ?></h2>
    <?php echo $tin_city_text; ?>
    <a href="<?php echo $tin_city_link['url']; ?>" target="<?php echo $tin_city_link['target']; ?>" class="button button-medium button-outline button-light"><?php echo $tin_city_link['title']; ?></a>
  </div>
</div>


<div class="home-club-winemaker" data-scrollax-parent="true">

  <!-- Club -->
  <?php
    $club = get_field('club');
    $club_title = $club['title'];
    $club_text = $club['text'];
    $club_link = $club['link'];
    $club_image = $club['image'];
  ?>
  <div class="feature home-club">
    <div class="feature-content">
      <h2 class="h2"><?php echo $club_title; ?></h2>
      <?php echo $club_text; ?>
      <a href="<?php echo $club_link['url']; ?>" target="<?php echo $club_link['target']; ?>" class="button button-medium button-outline button-dark"><?php echo $club_link['title']; ?></a>
    </div>
    <div class="feature-img">
      <img src="<?php echo $club_image['url']; ?>" alt="<?php echo $club_image['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
    </div>
  </div>

  <!-- Winemaker -->
  <?php
    $quote = get_field('quote');
    $quote_text = $quote['text'];
    $quote_name = $quote['name'];
    $quote_title = $quote['title'];
    $quote_image = $quote['image'];
  ?>
  <div class="home-winemaker">
    <div class="home-winemaker-wrap" data-scrollax-parent="true">
      <div class="home-winemaker-img">
        <img src="<?php echo $quote_image['url']; ?>" alt="<?php echo $quote_image['alt']; ?>">
      </div>
      <blockquote class="home-winemaker-content" data-scrollax="properties: { 'translateY': '5vw' }">
        <?php echo $quote_text; ?>
        <cite><span><?php echo $quote_name; ?></span> <br> <?php echo $quote_title; ?></cite>
      </blockquote>
    </div>
  </div>

</div>

<!-- Skyline -->
<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/home/celebration.jpg" alt="Celebration">
</div>

<?php get_footer(); ?>