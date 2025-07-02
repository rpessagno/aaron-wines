<?php

/*
Template Name: Wines
*/

get_header();

?>

<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="intro">
  <img src="<?php the_field('intro_logo'); ?>" alt="<?php the_field('intro_title'); ?>" class="intro-logo">
  <p><?php the_field('intro_text'); ?></p>
</div>



<div class="feature vineyards">
  <div class="feature-content">
    
    <div class="feature-content-slider">
    <?php if( have_rows('vineyards') ) { ?>
      <?php while ( have_rows('vineyards') ) { the_row(); ?>
        <div class="feature-content-slide">
          <h2 class="subtitle"><?php the_sub_field('vineyard_title'); ?></h2>
          <p><?php the_sub_field('vineyard_description'); ?></p>
        </div>
      <?php } ?>
    <?php } ?>
    </div>

  </div>
  <div class="feature-img feature-img-slider">
    
    <?php if( have_rows('vineyards') ) { ?>
      <?php while ( have_rows('vineyards') ) { the_row(); ?>
        <div class="feature-img-slide" style="background-image: url('<?php the_sub_field('vineyard_image'); ?>');">
        </div>
      <?php } ?>
    <?php } ?>

  </div>
</div>





<div class="section-header alt">
  <h1 class="title">Current Releases</h1>
</div>

<?php $brand = strtolower(get_the_title()); ?>

<div class="wines">

    <div class="feature-wrap alt">

      <?php if( have_rows('current_releases') ) { ?>
      <?php while ( have_rows('current_releases') ) { the_row(); ?>

      <?php
        $title = get_sub_field('title');
        $subtitle = get_sub_field('subtitle');
        $text = get_sub_field('text');
        $link = get_sub_field('link');
        $image = get_sub_field('image');
      ?>

      <div class="feature">
        <div class="feature-content">
          <h2 class="subtitle"><?php echo $title; ?></h2>
          <?php if ($subtitle) { ?><h3 class="subtitle2"><?php echo $subtitle; ?></h3><?php } ?>
          <p><?php echo $text; ?></p>
          <a href="<?php echo $link; ?>" class="button">View Wine</a>
        </div>
        <div class="feature-img" style="background-image: url('<?php echo $image; ?>');"></div>
      </div>

      <?php } ?>
      <?php } ?>

    </div>
  
</div>



<?php get_footer(); ?>