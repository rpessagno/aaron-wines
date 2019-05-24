<?php

/*
Template Name: Shop
*/

get_header();

?>


<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="section-header shop-aaron">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="shop-logo">
</div>


<?php $pageID = '5'; include('inc/shop-items.php'); ?>


<div class="section-header shop-aequorea">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aequorea" class="shop-logo">
</div>

<?php $pageID = '7'; include('inc/shop-items.php'); ?>

<?php get_footer(); ?>