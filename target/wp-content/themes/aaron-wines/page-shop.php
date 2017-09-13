<?php

/*
Template Name: Shop
*/

get_header();

?>


<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
  <h1>Shop Our Wines</h1>
</div>

<div class="intro">
  <h2 class="headline">Aaron</h2>
</div>


<?php $filter = 'aaron'; include('inc/shop-items.php'); ?>
<!-- <div class="shop-items">-->
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<!-- </div> -->

<div class="intro">
  <h2 class="headline">Aequorea</h2>
</div>


<?php $filter = 'aequorea'; include('inc/shop-items.php'); ?>
<div class="shop-items">
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
</div>

<?php get_footer(); ?>