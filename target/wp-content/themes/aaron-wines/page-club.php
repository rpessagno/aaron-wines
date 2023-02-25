<?php

/*
Template Name: Club
*/

get_header();

?>


<!-- Hero -->
<div class="hero page-hero" data-scrollax-parent="true">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/hero.jpg" alt="" data-scrollax="properties: { 'translateY': '10vw' }">
</div>


<!-- Intro -->
<div class="intro intro-dark club-intro" data-scrollax-parent="true">
  <div class="intro-content">
      <h1 class="h1">Wine Club</h1>
      <p>Our small (often very small) production wines are released twice per year, in April and November. We produce a variety of blends based around Petite Sirah and Rhone varietals from westside Paso Robles, as well as single vineyard Pinot Noirs and aromatic whites from the SLO Coast. Members receive priority access to these wines as well as the following benefits listed below:</p>
  </div>
  <div class="intro-img" data-scrollax="properties: { 'translateY': '-5vw' }">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/couch.jpg" alt="">
  </div>
</div>


<!-- Benefits -->
<div class="club-benefits" data-scrollax-parent="true">
  <div class="club-benefits-img">
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/benefits.jpg" alt="">
  </div>
  <div class="club-benefits-content" data-scrollax="properties: { 'translateY': '-6vw' }">
    <h2 class="h2">Member Benefits</h2>
    <ul>
      <li>6 bottles of wine 2x per year, in April and November</li>
      <li>20% discount on all club shipments and wine purchases</li>
      <li>First access to new releases, before they go public</li>
      <li>Annual allocation of our small production wines</li>
      <li>Complimentary tasting for you and 3 guests at the winery</li>
      <li>Membership is free and can be cancelled at any time</li>
    </ul>
    <a href="#" class="button button-dark button-solid button-medium">Join The Club</a>
  </div>
</div>


<!-- Skyline -->
<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/skyline.jpg" alt="Event">
<!--   <div class="home-skyline-content">
    <h1 class="h2">Shop Wines</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem adipisci similique quo, obcaecati consequuntur ea odio nostrum doloribus quae culpa iure expedita impedit nemo fugit debitis dolores voluptates pariatur facilis?</p>
    <a href="#" class="button button-dark button-outline button-medium">Shop Wines</a>
  </div> -->
</div>





<?php get_footer(); ?>