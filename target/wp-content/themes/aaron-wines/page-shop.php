<?php

/*
Template Name: Shop
*/

get_header();

?>



<div class="hero shop-hero" data-scrollax-parent="true">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/shop/SHOP-HERO.jpg" alt="" data-scrollax="properties: { 'translateY': '10vw' }">
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
    $products_count = count( get_sub_field( 'products' ) );
    $find = array(' ', '\'', '&');
    $replace = array('-', '', 'and');
    $item_slug = strtolower(str_replace($find, $replace, $title));
  ?>

  <?php if ($display === 'show') { ?>
  <div class="shop-section" data-scroll-target="<?php echo $item_slug; ?>" tabindex="0" style="background-color: <?php echo $background_color; ?>;">

    <div class="shop-header">
      <h2><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>"></h2>
      <p><?php echo $description; ?></p>
    </div>

    <div class="products products-align-<?php if ($products_count > 3) { echo 'left'; } elseif ($products_count === 1) { echo 'center'; } else { echo 'center-desktop'; } ?>">

      <?php while ( have_rows('products') ) { the_row(); ?>   
      <?php $post_object = get_sub_field('product'); ?>
      <?php if( $post_object ) { ?> 
      <?php $post = $post_object; setup_postdata( $post ); ?>
      <?php
        $title = get_field('title');
        $subtitle = get_field('subtitle');
        $sku = get_field('sku');
        $url = get_field('url');
      ?>
      <div class="product">
        <?php if ($url) { ?>
        <a href="<?php echo $url; ?>" class="product-img"><?php the_post_thumbnail(); ?></a>
        <?php } else { ?>
        <div class="product-img"><?php the_post_thumbnail(); ?></div>
        <?php } ?>
        <div class="product-content">
          <h2 class="h3"><?php echo $title; ?></h2>
          <h3 class="meta"><?php echo $subtitle; ?></h3>

          <div class="cart">
            <?php if ($sku) { ?>
            <div v65remotejs="addToCartForm" productsku="<?php echo $sku; ?>" class="product-cart" data-url="<?php echo $url; ?>"></div>
            <?php } ?>
          </div>

          <?php if ($url) { ?>
          <!-- <a href="<?php echo $url; ?>" class="product-link">View Details</a> -->
          <?php } ?>        

        </div>
      </div>
      <?php wp_reset_postdata(); ?> 
      <?php } ?> 
      <?php } ?>

    </div>
  </div>
  <?php } ?>

  <?php } ?>
  <?php } ?>

</div>



<?php get_footer(); ?>