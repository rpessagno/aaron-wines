<?php

/*
Template Name: Shop
*/

get_header();

?>


<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="section-header shop-aaron">
  <!-- <h2 class="title">Aaron</h2> -->
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="shop-logo">
</div>

<?php $filter = 'aaron'; include('inc/shop-items.php'); ?>
<!-- <div class="shop-items">-->
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<!-- </div> -->


<div class="section-header shop-aequorea">
  <!-- <h2 class="title">Aequorea</h2> -->
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aequorea" class="shop-logo">
</div>

<?php $filter = 'aequorea'; include('inc/shop-items.php'); ?>
<!-- <div class="shop-items"> -->
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<!-- </div> -->

<?php get_footer(); ?>