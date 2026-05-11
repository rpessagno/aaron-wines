<!-- Top Content -->
<?php if (have_rows('top_content')) { ?>
<?php while (have_rows('top_content')) { the_row(); ?>

<?php if (get_row_layout() == 'hero') { ?>
<!-- Hero -->
<?php
  $layout = get_sub_field('layout');
  $logo = get_sub_field('logo');
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $link = get_sub_field('link');
  $type = get_sub_field('type');
  $scheme = get_sub_field('color_scheme');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $images = get_sub_field('images');
?>
<div class="pb-hero pb-hero-<?php echo $layout; ?>">
  <div class="pb-hero-content scheme-<?php echo $scheme; ?>">
    <div class="pb-hero-content-inner">
      <?php if ($logo && $layout == 'fullscreen') { ?>
      <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['url']; ?>" class="pb-hero-logo">
      <?php } ?>
      <?php if ($title) { ?>
      <h1 class="h1"><?php echo $title; ?></h1>
      <?php } ?>
      <?php if ($text && $layout !== 'fullscreen') { ?>
      <p class="p2"><?php echo $text; ?></p>
      <?php } ?>
      <?php if ($link) { ?>
      <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
      <?php } ?>
    </div>
  </div>
  <div class="pb-hero-media">

    <?php if ($type == 'image') { ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="pb-hero-image">

    <?php } elseif ($type == 'video') { ?>
    <video autoplay loop muted preload playsinline class="pb-hero-image">
      <source src="<?php echo $video['url']; ?>" type="video/mp4">
    </video>

    <?php } elseif ($type == 'carousel') { ?>
    <div class="pb-hero-slider">
      <?php if( $images ) { ?>
      <?php foreach($images as $image) { ?>
      <div class="pb-hero-slider-item">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <?php } ?>
      <?php } ?>
    </div>
    <?php } ?>

  </div>
  <?php if ($layout == 'fullscreen') { ?>
  <button class="pb-hero-scroll"></button>
  <?php } ?>
</div>


<?php } elseif( get_row_layout() == 'overview' ) { ?>
<!-- Overview -->
<?php
  $layout = get_sub_field('layout');
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
  $link = get_sub_field('link');
  $hero = get_sub_field('hero');
  $logo = get_sub_field('logo');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $carousel = get_sub_field('carousel');
  $col_image = get_sub_field('col_image');
  $scheme = get_sub_field('color_scheme');
?>
<div class="overview scheme-<?php echo $scheme; ?>">

  <div class="overview-hero">

    <?php if ($layout == '1col' && $logo) { ?>
    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" class="overview-hero-logo">
    <?php } ?>

    <?php if ($hero == 'image') { ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="overview-hero-image">

    <?php } elseif ($hero == 'video') { ?>
    <video autoplay loop muted preload playsinline class="overview-hero-image">
      <source src="<?php echo $video['url']; ?>" type="video/mp4">
    </video>

    <?php } elseif ($hero == 'carousel') { ?>
    <div class="overview-hero-slider">
      <?php if( $carousel ) { ?>
      <?php foreach($carousel as $image) { ?>
      <div class="overview-hero-slider-item">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <?php } ?>
      <?php } ?>
    </div>
    <?php } ?>
  </div>

  <?php if ($layout == '1col') { ?>
  <div class="overview-intro">
    <h1 class="eyebrow"><?php echo $title; ?></h1>
    <?php if ($subtitle) { ?>
    <h2 class="h1"><?php echo $subtitle; ?></h2>
    <?php } ?>
    <div class="p1">
      <?php echo $text; ?>
    </div>
    <?php if ($link) { ?>
    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
    <?php } ?>
  </div>

  <?php } elseif ($layout == '2col') { ?>
  <div class="overview-columns">
    <div class="overview-column">
      <h1 class="eyebrow"><?php echo $title; ?></h1>
      <?php if ($subtitle) { ?>
      <h2 class="h1"><?php echo $subtitle; ?></h2>
      <?php } ?>
      <div class="p1">
        <?php echo $text; ?>
      </div>
      <?php if ($link) { ?>
      <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
      <?php } ?>
    </div>
    <div class="overview-image">
      <img src="<?php echo $col_image['url']; ?>" alt="<?php echo $col_image['alt']; ?>">
    </div>
  </div>
  <?php } ?>

</div>

<?php } ?>
<?php } ?>
<?php } ?>