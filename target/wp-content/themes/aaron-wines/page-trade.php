<?php

/*
Template Name: Trade & Media
*/

get_header();

?>



<article class="post">
  <header class="post-header">
    <h1 class="h1"><?php the_title(); ?></h1>
  </header>
</article>


<!-- Wines -->
<div class="trade-products">

  <div class="products">

    <?php while ( have_rows('products') ) { the_row(); ?>   
    <?php $post_object = get_sub_field('product'); ?>
    <?php if( $post_object ) { ?>
    <?php $post = $post_object; setup_postdata( $post ); ?>

    <?php
      $title = get_the_title();
      $find = array(' ', '\'');
      $replace = array('-', '');
      $item_slug = strtolower(str_replace($find, $replace, $title));
    ?>

    <div class="product" tabindex="-1">
      <div class="product-img"><?php the_post_thumbnail(); ?></div>
      <div class="product-content">
        <h3 class="h3"><?php the_title(); ?></h3>
        <a href="#<?php echo $item_slug; ?>" class="button button-outline button-small button-dark js-trade-modal-link">View Assets</a>
      </div>
    </div>
    <?php wp_reset_postdata(); ?> 
    <?php } ?> 
    <?php } ?>

  </div>
</div>


<!-- Wines Modal -->
<?php while ( have_rows('products') ) { the_row(); ?>   
<?php $post_object = get_sub_field('product'); ?>
<?php if( $post_object ) { ?> 
<?php $post = $post_object; setup_postdata( $post ); ?> 

<?php
  $title = get_the_title();
  $find = array(' ', '\'');
  $replace = array('-', '');
  $item_slug = strtolower(str_replace($find, $replace, $title));
?>

<div class="trade-assets" data-trade="<?php echo $item_slug; ?>" tabindex="-1">
  <header class="trade-assets-header">
    <h2 class="h3"><?php the_title(); ?></h2>
    <p class="text">Click a link below to download&nbsp;asset</p>
  </header>
  <div class="trade-assets-sections">

    <?php if( have_rows('trade_media') ) { ?>
    <?php while ( have_rows('trade_media') ) { the_row(); ?>
    <?php $title = get_sub_field('title'); ?>

    <div class="trade-assets-section">
      <h3 class="h4"><?php echo $title; ?></h3>
      <ul class="trade-assets-items">
        <?php if( have_rows('files') ) { ?>
        <?php while ( have_rows('files') ) { the_row(); ?>
        <?php $file = get_sub_field('file'); ?>

        <li class="trade-assets-item"><a href="<?php echo $file['url']; ?>" target="_blank" download><?php echo $file['title']; ?></a></li>

        <?php } ?>
        <?php } ?>
      </ul>
    </div>

    <?php } ?>
    <?php } ?>

  
  </div>
  <button class="close-button js-trade-assets-close"></button>
</div>


<?php wp_reset_postdata(); ?> 
<?php } ?>
<?php } ?>

<div class="trade-assets-overlay"></div>





<!-- Brand Assets -->
<div class="trade-brand">
    
  <?php if( have_rows('brand_assets') ) { ?>
  <?php while ( have_rows('brand_assets') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $file = get_sub_field('file');
    $image = get_sub_field('image');
  ?>
  <div class="trade-brand-item">
    <div class="trade-brand-item-img">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <div class="trade-brand-item-content">
      <h3 class="h3"><?php echo $title; ?></h3>
      <a href="<?php echo $file['url']; ?>" target="_blank" download class="button button-solid button-dark button-medium">Download</a>
    </div>
  </div>
  <?php } ?>
  <?php } ?>

</div>



<!-- Contacts -->
<div class="trade-brand">
    
  <?php if( have_rows('contacts') ) { ?>
  <?php while ( have_rows('contacts') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
  ?>
  <div class="trade-brand-item">
    <div class="trade-brand-item-content">
      <h3 class="h3"><?php echo $title; ?></h3>
      <?php echo $text; ?>
    </div>
  </div>
  <?php } ?>
  <?php } ?>

</div>




<?php get_footer(); ?>
