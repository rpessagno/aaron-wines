<?php

/*
Template Name: Club
*/

get_header();

?>



<div class="hero page-hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
  <h1 class="hero-title">Wine Club</h1>
</div>


  <div class="intro">
    <div class="intro-content">
      <p class="intro-text">Our small (often very small) production wines are released twice per year, in April and November. We produce a variety of blends based around Petite Sirah and Rhone varietals from westside Paso Robles, as well as single vineyard Pinot Noirs and aromatic whites from the SLO Coast. Members receive priority access to these wines as well as the following benefits listed below:</p>
    </div>
  </div>

<!-- 
    <div class="home-shop-content">
      <div class="home-shop-content-items">
        <div class="home-shop-content-item">
          <p>Our small (often very small) production wines are released twice per year, in April and November. We produce a variety of blends based around Petite Sirah and Rhone varietals from westside Paso Robles, as well as single vineyard Pinot Noirs and aromatic whites from the SLO Coast. Members receive priority access to these wines as well as the following benefits listed below:</p>
        </div>
        <div class="home-shop-content-item">
          <h2 class="h3">Member Benefits</h2>
          <ul style="margin-left: 1em;">
            <li>6 bottles of wine 2x per year, in April and November</li>
            <li>20% discount on all club shipments and wine purchases</li>
            <li>First access to new releases, before they go public</li>
            <li>Annual allocation of our small production wines</li>
            <li>Complimentary tasting for you and 3 guests at the winery</li>
            <li>Membership is free and can be cancelled at any time</li>
          </ul>
        </div>
        <a href="#" class="home-shop-content-link">Join <br> The Club</a>
      </div>
    </div>
 -->




<div class="club-benefits">
  <div class="club-benefits-content">
    <h2 class="h1">Member Benefits</h2>
    <ul style="margin-left: 1em;">
      <li>6 bottles of wine 2x per year, in April and November</li>
      <li>20% discount on all club shipments and wine purchases</li>
      <li>First access to new releases, before they go public</li>
      <li>Annual allocation of our small production wines</li>
      <li>Complimentary tasting for you and 3 guests at the winery</li>
      <li>Membership is free and can be cancelled at any time</li>
    </ul>
    <a href="#" class="home-shop-content-link">Join <br> The Club</a>
  </div>
</div>



<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/club/event.jpg" alt="Event">
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