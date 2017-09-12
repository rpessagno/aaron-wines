<?php

/*
Template Name: Wines
*/

get_header();

?>

<div class="hero"></div>

<div class="intro">
  <h1 class="title"><?php the_field('intro_title'); ?></h1>
  <p><?php the_field('intro_text'); ?></p>
</div>


<?php if( have_rows('vineyards') ) { ?>
  <?php while ( have_rows('vineyards') ) { the_row(); ?>

    <div class="feature">
      <div class="feature-content">
        <h2 class="subtitle"><?php the_sub_field('vineyard_title'); ?></h2>
        <?php the_sub_field('vineyard_text'); ?>
      </div>
      <div class="feature-img" style="background-image: url('<?php the_sub_field('vineyard_image'); ?>');">
        <?php the_sub_field('coordinate_1'); ?><br>
        <?php the_sub_field('coordinate_2'); ?>
      </div>
    </div>

  <?php } ?>
<?php } ?>



<div class="intro">
  <h1 class="title">Current Releases</h1>
</div>

<?php $brand = strtolower(get_the_title()); ?>

<div class="wines" data-vsPlugin="productList" id="wines">

  <script type="text/html" id="wines-custom">
    <div data-bind="foreach: parentProducts" class="feature-wrap">
      
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