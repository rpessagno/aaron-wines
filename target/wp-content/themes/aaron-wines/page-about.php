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
      <p class="p1"><?php echo $team_members_title; ?></p>
    </div>
      
    <?php } ?>
    <?php } ?>

  </div>
</div>



<div class="home-skyline">
  <img src="<?php bloginfo('template_directory'); ?>/assets/images/about/20-years.jpg" alt="">
</div>





 <div class="about-labels">

  <?php
    $labels = get_field('labels');
    $labels_eyebrow = $labels['eyebrow'];
    $labels_title = $labels['title'];
    $labels_image = $labels['image'];
    $labels_primary = $labels['primary_labels'];
  ?>
  <div class="about-labels-main">
    <div class="about-labels-header">
      <p class="eyebrow"><?php echo $labels_eyebrow; ?></p>
      <h1 class="h1"><?php echo $labels_title; ?></h1>
    </div>
    <div class="about-labels-main-wrap">
      <div class="about-labels-main-img" data-scrollax-parent="true">
        <img src="<?php echo $labels_image['url']; ?>" alt="<?php echo $labels_image['alt']; ?>" data-scrollax="properties: { 'translateY': '7vw' }">
      </div>
      <div class="about-labels-main-items">

        <?php foreach($labels_primary as $labels_primary_item) { ?>
        <?php
          $logo = $labels_primary_item['logo'];
          $text = $labels_primary_item['text'];
          $link = $labels_primary_item['link'];
        ?>
        
        <div class="about-labels-main-item">
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="about-labels-logo">
          <p><?php echo $text; ?></p>
          <a href="<?php echo $link['url']; ?>"class="button button-solid button-medium button-dark"><?php echo $link['title']; ?></a>
        </div>

        <?php } ?>

      </div>
    </div>
  </div>

  <div class="about-labels-sub">

    <?php if( have_rows('secondary_labels') ) { ?>
    <?php while ( have_rows('secondary_labels') ) { the_row(); ?>
    <?php
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $text = get_sub_field('text');
      $link = get_sub_field('link');
    ?>

    <div class="about-labels-sub-item">
      <div class="about-labels-sub-img">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <div class="about-labels-sub-content">
        <h2 class="h3"><?php echo $title; ?></h2>
        <p class="p1"><?php echo $text; ?></p>
        <a href="<?php echo $link['url']; ?>" class="button button-outline button-small button-dark"><?php echo $link['title']; ?></a>
      </div>
    </div>

    <?php } ?>
    <?php } ?>

  </div>

</div> 




<!-- Gallery -->
<?php $gallery = get_field('gallery'); ?>
<div class="about-labels-gallery">
  <div class="about-labels-gallery-mask" data-scrollax-parent="true">
    <img src="<?php echo $gallery['url']; ?>" alt="<?php echo $gallery['alt']; ?>" data-scrollax="properties: { 'translateY': '10vw' }">
  </div>
</div>


<!-- Giving Back -->
<?php
  $giving_back = get_field('giving_back');
  $giving_back_eyebrow = $giving_back['eyebrow'];
  $giving_back_title = $giving_back['title'];
  $giving_back_text = $giving_back['text'];
  $giving_back_link_1 = $giving_back['link_1'];
  $giving_back_link_2 = $giving_back['link_2'];
  $giving_back_logo = $giving_back['logo'];
  $giving_back_image = $giving_back['image'];
?>
<div class="about-planet">

  <div class="intro about-planet-intro">
    <div class="intro-content">
        <h1 class="eyebrow"><?php echo $giving_back_eyebrow; ?></h1>
        <h1 class="h1"><?php echo $giving_back_title; ?></h1>
        <?php echo $giving_back_text; ?>
        <div class="button-group">
          <a href="<?php echo $giving_back_link_1['url']; ?>" target="<?php echo $giving_back_link_1['target']; ?>" class="button button-outline button-small button-dark"><?php echo $giving_back_link_1['title']; ?></a>
          <a href="<?php echo $giving_back_link_2['url']; ?>" target="<?php echo $giving_back_link_2['target']; ?>" class="button button-outline button-small button-dark"><?php echo $giving_back_link_2['title']; ?></a>
        </div>
    </div>
    <div class="about-planet-intro-img">
      <img src="<?php echo $giving_back_logo['url']; ?>" alt="<?php echo $giving_back_logo['alt']; ?>">
    </div>
  </div>

  <img src="<?php echo $giving_back_image['url']; ?>" alt="<?php echo $giving_back_image['alt']; ?>" class="about-planet-img">

</div>


<?php get_footer(); ?>