<?php

/*
Template Name: Club
*/

get_header();

?>



<div class="hero page-hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>



<div class="intro intro-dark club-intro">
  <div class="intro-content">
      <h1 class="h1">Wine Club</h1>
      <p>Our small (often very small) production wines are released twice per year, in April and November. We produce a variety of blends based around Petite Sirah and Rhone varietals from westside Paso Robles, as well as single vineyard Pinot Noirs and aromatic whites from the SLO Coast. Members receive priority access to these wines as well as the following benefits listed below:</p>
  </div>
  <div class="intro-img">
    <img src="//localhost:3000/wp-content/uploads/2017/09/shop.jpg" alt="">
  </div>
</div>



<div class="club-benefits">
  <div class="club-benefits-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/visit.jpg');"></div>
  <div class="club-benefits-content">
    <h2 class="h2">Member Benefits</h2>
    <ul style="margin-left: 1em;">
      <li>6 bottles of wine 2x per year, in April and November</li>
      <li>20% discount on all club shipments and wine purchases</li>
      <li>First access to new releases, before they go public</li>
      <li>Annual allocation of our small production wines</li>
      <li>Complimentary tasting for you and 3 guests at the winery</li>
      <li>Membership is free and can be cancelled at any time</li>
    </ul>
    <a href="#" class="button button-dark button-outline button-medium">Join The Club</a>
  </div>
</div>

<!-- 
<div class="feature club-benefits">
  <div class="feature-content">
    <h2 class="h2">Member Benefits</h2>
    <ul style="margin-left: 1em;">
      <li>6 bottles of wine 2x per year, in April and November</li>
      <li>20% discount on all club shipments and wine purchases</li>
      <li>First access to new releases, before they go public</li>
      <li>Annual allocation of our small production wines</li>
      <li>Complimentary tasting for you and 3 guests at the winery</li>
      <li>Membership is free and can be cancelled at any time</li>
    </ul>
    <a href="#" class="button button-light button-outline button-medium">Join The Club</a>
  </div>
  <div class="feature-img" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/images/home/visit.jpg');"></div>
</div>
 -->


<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/event.jpg" alt="Event">
<!--   <div class="home-skyline-content">
    <h1 class="h2">Shop Wines</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem adipisci similique quo, obcaecati consequuntur ea odio nostrum doloribus quae culpa iure expedita impedit nemo fugit debitis dolores voluptates pariatur facilis?</p>
    <a href="#" class="button button-dark button-outline button-medium">Shop Wines</a>
  </div> -->
</div>


<!--   <div class="feature home-visit">
    <div class="feature-content">
      <h2 class="h2">Wine Club</h2>
      <p><?php the_field('intro_text'); ?></p>
    </div>
    <div class="feature-img" style="background-image: url('//localhost:3000/wp-content/uploads/2017/09/shop.jpg');"></div>
  </div>

 -->





<?php get_footer(); ?>