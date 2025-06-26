<?php

/*
Template Name: Shop
*/

get_header();

?>



<!-- Hero -->
<?php $hero = get_field('hero'); ?>
<div class="hero shop-hero" data-scrollax-parent="true">
  <img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>

<div class="shop">

  <!-- Sections -->
  <?php if( have_rows('section') ) { ?>
  <?php while ( have_rows('section') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    $logo = get_sub_field('logo');
    $background_color = get_sub_field('background_color');
    $display = get_sub_field('display');
    $slug = get_sub_field('slug');
    $products_count = count( get_sub_field( 'products' ) );
    $find = array(' ', '\'', '&');
    $replace = array('-', '', 'and');
    $item_slug = strtolower(str_replace($find, $replace, $title));
  ?>

  <?php if ($display === 'show') { ?>
  <div class="shop-section" data-scroll-target="<?php echo $item_slug; ?>" tabindex="0" style="background-color: <?php echo $background_color; ?>;">

    <div class="shop-header">
      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>">
      <p class="description"><?php echo $description; ?></p>
    </div>

    <div class="products products-align-<?php if ($products_count > 3) { echo 'left'; } elseif ($products_count === 1) { echo 'center'; } else { echo 'center-desktop'; } ?>">

      <div class="c7-product-collection" data-collection-slug="<?php echo $slug; ?>"></div>

    </div>
  </div>
  <?php } ?>

  <?php } ?>
  <?php } ?>

</div>



<?php get_footer(); ?>