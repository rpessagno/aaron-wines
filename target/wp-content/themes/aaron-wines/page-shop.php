<?php

/*
Template Name: Shop
*/

get_header();

?>


<div class="hero"></div>

<div class="intro">
  <h1>Aaron</h1>
</div>


<?php $filter = 'aaron'; include('inc/shop-items.php'); ?>
<!-- <div class="shop-items">-->
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<!-- </div> -->

<div class="intro">
  <h1>Aequorea</h1>
</div>


<?php $filter = 'aequorea'; include('inc/shop-items.php'); ?>
<div class="shop-items">
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
<?php //include('inc/shop-item-fake.php'); ?>
</div>

<?php get_footer(); ?>