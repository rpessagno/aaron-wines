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

<div class="feature-wrap">
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
  <div class="feature">
    <div class="feature-content">
      <h2 class="subtitle">Kick as wines from Paso Robles</h2>
      <a href="#" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('https://cdn.shopify.com/s/files/1/0362/4429/t/8/assets/slideshow_2.jpg?8356872384184126241');"></div>
  </div>
</div>

<?php get_footer(); ?>