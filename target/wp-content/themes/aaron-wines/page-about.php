<?php

/*
Template Name: About
*/

get_header();

?>



<!-- Hero -->
<?php $hero = get_field('hero'); ?>
<div class="hero page-hero" data-scrollax-parent="true">
  <img src="<?php echo $hero['url']; ?>" alt="<?php echo $hero['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>


<!-- Intro -->
<?php
  $intro = get_field('intro');
  $intro_eyebrow = $intro['eyebrow'];
  $intro_title = $intro['title'];
  $intro_text = $intro['text'];
  $intro_image = $intro['image'];
?>
<div class="intro intro-light about-winemaker" data-scrollax-parent="true">
  <div class="intro-content">
      <h1 class="eyebrow"><?php echo $intro_eyebrow; ?></h1>
      <h2 class="h1"><?php echo $intro_title; ?></h2>
      <?php echo $intro_text; ?>
  </div>
  <div class="intro-img" data-scrollax="properties: { 'translateY': '-5vw' }">
    <img src="<?php echo $intro_image['url']; ?>" alt="<?php echo $intro_image['alt']; ?>">
  </div>
</div>



<!-- Team -->
<?php
  $team = get_field('team');
  $team_eyebrow = $team['eyebrow'];
  $team_title = $team['title'];
?>
<div class="about-team">
  <div class="about-team-header">
    <p class="eyebrow"><?php echo $team_eyebrow; ?></p>
    <h1 class="h1"><?php echo $team_title; ?></h1>
  </div>
  <div class="about-team-items">

    <?php if( have_rows('team_members') ) { ?>
    <?php while ( have_rows('team_members') ) { the_row(); ?>

    <?php
      $team_members_name = get_sub_field('name');
      $team_members_title = get_sub_field('title');
      $team_members_image = get_sub_field('image');
    ?>

    <div class="about-team-item">
      <div class="about-team-item-img"><img src="<?php echo $team_members_image['url']; ?>" alt="<?php echo $team_members_image['alt']; ?>"></div>
      <h3 class="h3"><?php echo $team_members_name; ?></h3>
      <p><?php echo $team_members_title; ?></p>
    </div>
      
    <?php } ?>
    <?php } ?>

  </div>
</div>



<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/20-years.jpg" alt="">
</div>





<!-- Labels -->
<!--
<?php
  $team = get_field('team');
  $team_eyebrow = $team['eyebrow'];
  $team_title = $team['title'];
?>
<div class="about-labels">

  <div class="about-labels-header">
    <p class="eyebrow"><?php echo $labels_eyebrow; ?></p>
    <h1 class="h1"><?php echo $labels_title; ?></h1>
  </div>


    <?php if( have_rows('primary_labels') ) { ?>
    <?php while ( have_rows('primary_labels') ) { the_row(); ?>

    <?php
      $primary_labels_title = get_sub_field('title');
      $primary_labels_text = get_sub_field('text');
      $primary_labels_link = get_sub_field('link');
      $primary_labels_logo = get_sub_field('logo');
      $primary_labels_image = get_sub_field('image');
    ?>

    <div class="about-labels-main-item about-labels-main-item-1">

      <div class="about-labels-main-img">
        <img src="<?php echo $primary_labels_image['url']; ?>" alt="<?php echo $primary_labels_image['alt']; ?>">
      </div>

      <div class="about-labels-main-content">
        <img src="<?php echo $primary_labels_logo['url']; ?>" alt="<?php echo $primary_labels_logo['alt']; ?>" class="about-labels-logo">
        <?php echo $primary_labels_text; ?>
        <a href="<?php echo $primary_labels_link['url']; ?>" class="button button-solid button-medium button-dark"><?php echo $primary_labels_link['title']; ?></a>
      </div>

    </div>

    <?php } ?>
    <?php } ?>

  

 <div class="about-labels-sub">

    <?php if( have_rows('secondary_labels') ) { ?>
    <?php while ( have_rows('secondary_labels') ) { the_row(); ?>

    <?php
      $secondary_labels_title = get_sub_field('title');
      $secondary_labels_text = get_sub_field('text');
      $secondary_labels_link = get_sub_field('link');
      $secondary_labels_logo = get_sub_field('logo');
      $secondary_labels_image = get_sub_field('image');
    ?>

    <div class="about-labels-sub-item">
      <div class="about-labels-sub-img">
        <img src="<?php echo $secondary_labels_image['url']; ?>" alt="<?php echo $secondary_labels_image['alt']; ?>">
      </div>
      <div class="about-labels-sub-content">
        <h2 class="h2"><?php echo $secondary_labels_title; ?></h2>
        <?php echo $secondary_labels_text; ?>
        <a href="<?php echo $secondary_labels_link['url']; ?>" class="button button-outline button-small button-dark"><?php echo $secondary_labels_link['title']; ?></a>
      </div>
    </div>

    <?php } ?>
    <?php } ?>

  </div>

</div>


-->


 <div class="about-labels">

  <div class="about-labels-main">
    <div class="about-labels-header">
      <p class="eyebrow">Lorem Ipsum</p>
      <h1 class="h1">Our Labels</h1>
    </div>
    <div class="about-labels-main-wrap">
      <div class="about-labels-main-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/labels-aaron-aequorea.jpg" alt="">
      </div>
      <div class="about-labels-main-items">
        <div class="about-labels-main-item">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aaron-logo-black.svg" alt="Aaron" class="about-labels-logo">
          <p>Aaron began in 2002 with a focus on producing powerful, age-worthy wines from the rugged hillsides of westside Paso Robles, California. Always seeking to veer from the norm, we found inspiration in creating blends that centered around one of California's most historic grapes — Petite Sirah. We source intense, yet balanced fruit from the Willow Creek, Adelaida, and Templeton Gap districts. From these sites we coax this massively structured varietal into a portfolio of unique blends that evoke our best expression of west side Paso Robles terroir.</p>
          <a href="#"class="button button-solid button-medium button-dark">Shop Aaron</a>
        </div>
        <div class="about-labels-main-item">
          <img src="<?php bloginfo('template_directory'); ?>/assets/images/global/aequorea-logo-black.svg" alt="Aaron" class="about-labels-logo">
          <p>Latin for “Of The Sea,” Aequorea is a study in extreme coastal winegrowing, focused specifically on Pinot Noir and aromatic white wines. Our devotion to working with vineyards west of the Santa Lucia Mountains, closer to the ocean than most anywhere else in California, led to us spearheading the creation of the San Luis Obispo Coast (SLO Coast) AVA. From these foggy, windswept sites we work with dedicated growers to craft a portfolio of expressive wines that showcase truly coastal terroir, each vineyard being no more than 6 miles from the Pacific.</p>
          <a href="#"class="button button-solid button-medium button-dark">Shop Aequorea</a>
        </div>
      </div>
    </div>
  </div>

  <div class="about-labels-sub">
    <div class="about-labels-sub-item">
      <div class="about-labels-sub-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/nature-boy.jpg" alt="">
      </div>
      <div class="about-labels-sub-content">
        <h2 class="h2">Nature Boy</h2>
        <p>A wine originally made for ourselves and industry friends, we realized it was too good not to share with all of you. Nature Boy is a 100% whole cluster, 100% carbonic maceration Grenache sourced from our favorite vineyards in the Willow Creek District in west Paso Robles. Light in body, moderate in alcohol, and packed full of aromatics and bright fruit- it is an absolute joy to drink.</p>
        <a href="#"class="button button-outline button-small button-dark">Shop Nature Boy</a>
      </div>
    </div>
    <div class="about-labels-sub-item">
      <div class="about-labels-sub-content">
        <h2 class="h2">Keola</h2>
        <p>“Keola,” which is Aaron Jackson’s Hawaiian middle name, are wines comprised of grapes from the same vineyards that make up our top-tier wines. We don’t purchase inexpensive or lower quality fruit for these bends, rather it is comprised of extra juice that simply don’t find their way into our Aaron or Aequorea wines. This means that these wines always massively overdeliver for their price, with a similar pedigree and attention to detail as our flagship wines, but at a more approachable price point for everyday drinking.</p>
        <a href="#"class="button button-outline button-small button-dark">Shop Keola</a>
      </div>
      <div class="about-labels-sub-img">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/keola.jpg" alt="">
      </div>
    </div>
  </div>

</div> 




<!-- Gallery -->
<?php $gallery = get_field('gallery'); ?>
<div class="about-labels-gallery">
  <img src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
</div>


<!-- Giving Back -->
<?php
  $giving_back = get_field('giving_back');
  $giving_back_title = $giving_back['title'];
  $giving_back_text = $giving_back['text'];
  $giving_back_link = $giving_back['link'];
  $giving_back_logo = $giving_back['logo'];
  $giving_back_image = $giving_back['image'];
?>
<div class="about-planet">

  <div class="intro about-planet-intro">
    <div class="intro-content">
        <h1 class="eyebrow">Lorem Ipsum</h1>
        <h1 class="h1"><?php echo $giving_back_title; ?></h1>
        <?php echo $giving_back_text; ?>
        <a href="<?php echo $giving_back_link['url']; ?>" target="<?php echo $giving_back_link['target']; ?>" class="button button-outline button-medium button-dark"><?php echo $giving_back_link['title']; ?></a>
    </div>
    <div class="about-planet-intro-img">
      <img src="<?php echo $giving_back_logo['url']; ?>" alt="<?php echo $giving_back_logo['alt']; ?>">
    </div>
  </div>

  <img src="<?php echo $giving_back_image['url']; ?>" alt="<?php echo $giving_back_image['alt']; ?>" class="about-planet-img">

</div>


<?php get_footer(); ?>