<?php

/*
Template Name: Shop
*/

get_header();

?>



<div class="hero page-hero" data-scrollax-parent="true">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/labels-aaron-aequorea.jpg" alt="" data-scrollax="properties: { 'translateY': '10vw' }">
</div>

<!-- <div class="section-header shop-aaron">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="shop-logo">
</div>


<?php $pageID = '5'; include('inc/shop-items.php'); ?>


<div class="section-header shop-aequorea">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aequorea" class="shop-logo">
</div>

<?php $pageID = '7'; include('inc/shop-items.php'); ?>
 -->

<div class="shop">

  <!-- Sections -->
  <?php if( have_rows('section') ) { ?>
  <?php while ( have_rows('section') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $logo = get_sub_field('logo');
    $find = array(' ', '\'', '&');
    $replace = array('-', '', 'and');
    $item_slug = strtolower(str_replace($find, $replace, $title));
  ?>

  <div class="shop-section" data-scroll-target="<?php echo $item_slug; ?>" tabindex="0">

    <div class="shop-header">
      <h2><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['title']; ?>"></h2>
    </div>

    <div class="products">

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

</div>



<?php get_footer(); ?>