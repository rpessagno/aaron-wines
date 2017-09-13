<?php

/*
Template Name: Wines
*/

get_header();

?>

<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="intro">
  <h1 class="headline"><?php the_field('intro_title'); ?></h1>
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
          <span class="coordinates"><?php the_sub_field('north'); ?>&deg; N, <?php the_sub_field('west'); ?>&deg; W</span>
        </div>
      <?php } ?>
    <?php } ?>

  </div>
</div>





<div class="section-header">
  <h1 class="title">Current Releases</h1>
</div>

<?php $brand = strtolower(get_the_title()); ?>

<div class="wines" data-vsPlugin="productList" id="wines">

  <script type="text/html" id="wines-custom">
    <div data-bind="foreach: parentProducts" class="feature-wrap alt">
      
      <!-- ko if: Custom1 == '<?php echo $brand; ?>' -->

      <div class="feature">
        <div class="feature-content">
          <h2 class="subtitle"><a data-bind="text: Title, attr: { href: '/shop/product/?item=' + Tag }"></a></h2>
          <p data-bind="text: Teaser"></p>
          <a data-bind="attr: { href: '/shop/product/?item=' + Tag }" class="button">View Wine</a>
        </div>
        <div class="feature-img" data-bind="attr: { style: 'background-image: url(' + ListImageUrl + ');' }"></div>
      </div>


      <!-- /ko -->

    </div>
  </script>
  
</div>



<?php get_footer(); ?>