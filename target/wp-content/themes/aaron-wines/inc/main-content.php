<!-- Main Content -->
<?php if( have_rows('main_content') ) { ?>
<?php while( have_rows('main_content') ) { the_row(); ?>


<?php if( get_row_layout() == 'intro' ) { ?>
<!-- Intro -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
  $link = get_sub_field('link');
  $type = get_sub_field('type');
  $bg_img = get_sub_field('bg_img');
  $scheme = get_sub_field('color_scheme');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-intro scheme-<?php echo $scheme; ?><?php if ($type == 'boxed') { ?> pb-intro-boxed<?php } ?>" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-intro-content">
    <h1 class="eyebrow"><?php echo $title; ?></h2>
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
  <?php if ($type == 'bg') { ?>
  <div class="pb-intro-image">
    <img src="<?php echo $bg_img['url']; ?>" alt="<?php echo $bg_img['alt']; ?>">
  </div>
  <?php } ?>
</div>


<?php } elseif( get_row_layout() == 'features' ) { ?>
<!-- Features -->
<?php
  $layout = get_sub_field('layout');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-feature-group layout-<?php echo $layout; ?>" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <?php if( have_rows('feature_items') ) { ?>
  <?php while ( have_rows('feature_items') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');
    $text = get_sub_field('text');
    $link = get_sub_field('link');
    $image = get_sub_field('image');
  ?>
  <div class="pb-feature">
    <div class="pb-feature-content scheme-light">
      <p class="eyebrow"><?php echo $title; ?></p>
      <h1 class="h1"><?php echo $subtitle; ?></h1>
      <div class="p1"><?php echo $text; ?></div>
      <?php if ($link) { ?>
      <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
      <?php } ?>
    </div>
    <div class="pb-feature-img">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
  </div>
  <?php } ?>
  <?php } ?>
</div>


<?php } elseif( get_row_layout() == 'featured_products' ) { ?>
<!-- Featured Products -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $slug = get_sub_field('slug');
  $hide_product_teasers = get_sub_field('hide_product_teasers');
  $link = get_sub_field('link');
?>
<div class="pb-intro">
  <div class="pb-intro-content scheme-light less-padding">
    <h1 class="eyebrow"><?php echo $subtitle; ?></h1>
    <h2 class="h1"><?php echo $title; ?></h2>
  </div>
  <div class="featured-products scheme-light">
    <?php if( have_rows('products') ) { ?>
    <?php while ( have_rows('products') ) { the_row(); ?>
    <?php
      $image = get_sub_field('image');
      $title = get_sub_field('title');
      $subtitle = get_sub_field('subtitle');
      $price = get_sub_field('price');
      $link = get_sub_field('link');
    ?>
    <div class="featured-product">
      <div class="featured-product-image">
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
      </div>
      <h2 class="featured-product-title"><?php echo $title; ?></h2>
      <?php if ($subtitle) { ?>
      <h3 class="featured-product-subtitle"><?php echo $subtitle; ?></h3>
      <?php } ?>
      <?php if ($price) { ?>
      <h3 class="featured-product-price"><?php echo $price; ?></h3>
      <?php } ?>
      <?php if ($link) { ?>
      <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-medium button-dark button-outline"><?php echo $link['title']; ?></a>
      <?php } ?>
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</div>


<?php } elseif( get_row_layout() == 'staff' ) { ?>
<!-- Staff -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
  $type = get_sub_field('type');
  $align = get_sub_field('align');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-intro" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-intro-content scheme-light">
    <h1 class="eyebrow"><?php echo $title; ?></h1>
    <h2 class="h1"><?php echo $subtitle; ?></h2>
    <p class="p1"><?php echo $text; ?></p>
  </div>
</div>

<?php if ($type == 'grid') { ?>
<div class="staff staff-grid align-<?php echo $align; ?>">
  <?php if( have_rows('staff_items') ) { ?>
  <?php while ( have_rows('staff_items') ) { the_row(); ?>
  <?php
    $name = get_sub_field('name');
    $role = get_sub_field('role');
    $image = get_sub_field('image');
  ?>
  <div class="staff-grid-item scheme-light">
    <div class="staff-grid-item-image">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <h2 class="h3"><?php echo $name; ?></h2>
    <?php if ($role) { ?>
    <h3 class="meta"><?php echo $role; ?></h3>
    <?php } ?>
  </div>
  <?php } ?>
  <?php } ?>
</div>

<?php } elseif ($type == 'list') { ?>
<div class="staff staff-column">
  <?php if( have_rows('staff_items') ) { ?>
  <?php while ( have_rows('staff_items') ) { the_row(); ?>
  <?php
    $name = get_sub_field('name');
    $role = get_sub_field('role');
    $bio = get_sub_field('bio');
    $image = get_sub_field('image');
  ?>
  <div class="staff-column-item scheme-light">
    <div class="staff-column-item-image">
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    </div>
    <div class="staff-column-item-content">
      <h2 class="h3"><?php echo $name; ?></h2>
      <?php if ($role) { ?>
      <h3 class="meta"><?php echo $role; ?></h3>
      <?php } ?>
      <div class="p1"><?php echo $bio; ?></div>
    </div>
  </div>
  <?php } ?>
  <?php } ?>
</div>
<?php } ?>


<?php } elseif( get_row_layout() == 'contact' ) { ?>
<!-- Contact -->
<?php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $phone = get_sub_field('phone');
  $email = get_sub_field('email');
  $address = get_sub_field('address');
  $google_maps_url = get_sub_field('google_maps_url');
  $hours = get_sub_field('hours');
  $google_maps_embed = get_sub_field('google_maps_embed');
  $scheme = get_sub_field('color_scheme');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-hero pb-hero-split contact" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-hero-content contact-content scheme-<?php echo $scheme; ?>">
    <div class="pb-hero-content-inner">
      <h1 class="h1"><?php echo $title; ?></h1>
      <?php if ($text) { ?>
      <p class="p1"><?php echo $text; ?></p>
      <?php } ?>
      <div class="contact-items">
        <?php if ($phone) { ?>
        <div class="contact-item">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/phone.svg'); ?>
          <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
        </div>
        <?php } ?>
        <?php if ($email) { ?>
        <div class="contact-item">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/email.svg'); ?>
          <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </div>
        <?php } ?>
        <?php if ($address) { ?>
        <div class="contact-item">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/location.svg'); ?>
          <a href="<?php echo $google_maps_url; ?>" target="_blank"><?php echo $address; ?></a>
        </div>
        <?php } ?>
        <?php if ($hours) { ?>
        <div class="contact-item">
          <?php echo file_get_contents(get_template_directory() . '/assets/images/global/clock.svg'); ?>
          <?php echo $hours; ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="pb-hero-media contact-media">
    <?php echo $google_maps_embed; ?>
  </div>

</div>


<?php } elseif( get_row_layout() == 'form' ) { ?>
<!-- Form -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
  $type = get_sub_field('type');
  $form = get_sub_field('form');
  $c7_form_id = get_sub_field('c7_form_id');
  $scheme = get_sub_field('color_scheme');
  $anchor = get_sub_field('anchor');
?>
<div class="form scheme-<?php echo $scheme; ?>" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-intro">
    <div class="pb-intro-content">
      <h1 class="eyebrow"><?php echo $title; ?></h1>
      <?php if ($subtitle) { ?>
      <h2 class="h1"><?php echo $subtitle; ?></h2>
      <?php } ?>
      <?php if ($text) { ?>
      <p class="p1"><?php echo $text; ?></p>
      <?php } ?>
    </div>
  </div>
  <?php if ($type == 'wpforms') { ?>
  <?php echo do_shortcode($form); ?>
  <?php } elseif ($type == 'commerce7') { ?>
  <div class="c7-custom-form" data-form-code="<?php echo do_shortcode($c7_form_id); ?>"></div>
  <?php } ?>

</div>


<?php } elseif( get_row_layout() == 'content_with_image' ) { ?>
<!-- Content With Image -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $content = get_sub_field('content');
  $link = get_sub_field('link');
  $image = get_sub_field('image');
  $anchor = get_sub_field('anchor');
?>
<div class="cwi" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="cwi-main scheme-light">
    <h1 class="eyebrow"><?php echo $title; ?></h1>
    <?php if ($subtitle) { ?>
    <h2 class="h1"><?php echo $subtitle; ?></h2>
    <?php } ?>
    <div class="p1">
      <?php echo $content; ?>
    </div>
    <?php if ($link) { ?>
    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
    <?php } ?>
  </div>
  <div class="cwi-aside">
    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
  </div>
</div>



<?php } elseif( get_row_layout() == 'column_content' ) { ?>
<!-- Column Content -->
<?php
  $title = get_sub_field('title');
  $columns = get_sub_field('columns');
  $content_1 = get_sub_field('content_1');
  $content_2 = get_sub_field('content_2');
  $content_3 = get_sub_field('content_3');
  $link = get_sub_field('link');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-intro" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-intro-content scheme-light less-padding">
    <h1 class="h1"><?php echo $title; ?></h1>
  </div>
</div>
<div class="columns <?php echo $columns; ?> post-content">
  <div class="columns-item">
    <?php echo $content_1; ?>
  </div>
  <?php if ($columns == 'column2' || $columns == 'column3') { ?>
  <div class="columns-item">
    <?php echo $content_2; ?>
  </div>
  <?php } ?>
  <?php if ($columns == 'column3') { ?>
  <div class="columns-item">
    <?php echo $content_3; ?>
  </div>
  <?php } ?>
</div>
<div class="pb-intro columns-footer">
  <div class="pb-intro-content">
    <?php if ($link) { ?>
    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button button-large button-mid button-solid"><?php echo $link['title']; ?></a>
    <?php } ?>
  </div>
</div>


<?php } elseif( get_row_layout() == 'image_slider' ) { ?>
<!-- Image Slider -->
<?php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $images = get_sub_field('images');
?>

<div class="image-slider">
  <?php if ($title !=='') { ?>
  <div class="pb-intro">
    <div class="pb-intro-content scheme-light">
      <h1 class="h1"><?php echo $title; ?></h1>
      <?php if ($text) { ?>
      <p class="p1"><?php echo $text; ?></p>
      <?php } ?>
    </div>
  </div>
  <?php } ?>
  <div class="image-slider-items">
    <?php if( $images ) { ?>
    <?php foreach( $images as $image ) { ?>
    <div class="image-slider-item">
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    </div>
    <?php } ?>
    <?php } ?>
  </div>
</div>


<?php } elseif( get_row_layout() == 'photo_collage' ) { ?>
<!-- Photo Collage -->
<?php
  $photos = get_sub_field('photos');
?>
<div class="collage">
  <?php foreach( $photos as $photo ) { ?>
  <div class="collage-item">
    <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>">
  </div>
  <?php } ?>
</div>


<?php } elseif( get_row_layout() == 'image_gallery' ) { ?>
<!-- Image Gallery -->
<?php
  $width = get_sub_field('width');
  $images = get_sub_field('images');
  $columns = get_sub_field('columns');
?>
<div class="image-gallery image-gallery-<?php echo $width; ?>">
  <?php foreach( $images as $image ) { ?>
  <div class="image-gallery-item image-gallery-item-<?php echo $columns; ?>">
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
    <?php if ($image['caption']) { ?>
    <div class="image-gallery-item-caption">
      <p class="p1"><?php echo $image['caption']; ?></p>
    </div>
    <?php } ?>
  </div>
  <?php } ?>
</div>

<?php } elseif( get_row_layout() == 'video' ) { ?>
<!-- Video -->
<?php
  $video_url = get_sub_field('video_url');
?>
<div class="video">
  <?php echo $video_url; ?>
</div>

<?php } elseif( get_row_layout() == 'video_gallery' ) { ?>
<!-- Video Gallery -->
<div class="video-gallery">
  <?php if( have_rows('videos') ) { ?>
  <?php while ( have_rows('videos') ) { the_row(); ?>
  <?php
    $title = get_sub_field('title');
    $text = get_sub_field('text');
    $video_url = get_sub_field('video_url');
  ?>
  <div class="video-gallery-item scheme-light">
    <?php echo $video_url; ?>
    <?php if ($title) { ?>
    <h2 class="h3"><?php echo $title; ?></h2>
    <?php } ?>
    <?php if ($text) { ?>
    <p class="p1"><?php echo $text; ?></p>
    <?php } ?>
  </div>
  <?php } ?>
  <?php } ?>
</div>


<?php } elseif( get_row_layout() == 'grid_links' ) { ?>
<!-- Grid Links -->
<?php
  $title = get_sub_field('title');
  $subtitle = get_sub_field('subtitle');
  $text = get_sub_field('text');
  $link = get_sub_field('link');
  $columns = get_sub_field('columns');
  $scheme = get_sub_field('color_scheme');
  $anchor = get_sub_field('anchor');
?>
<div class="pb-intro scheme-<?php echo $scheme; ?>" <?php if ($anchor) { ?>data-scroll-target="<?php echo $anchor; ?><?php } ?>">
  <div class="pb-intro-content">
    <h1 class="eyebrow"><?php echo $title; ?></h2>
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
  <div class="grid">
    <?php if( have_rows('links') ) { ?>
    <?php while ( have_rows('links') ) { the_row(); ?>
      <?php
        $link = get_sub_field('link');
        $text = get_sub_field('text');
        $image = get_sub_field('image');
      ?>
      <a href="<?php echo $link['url']; ?>" class="grid-item grid-item-<?php echo $columns; ?>">
        <span class="grid-item-img">
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="grid-item-img">
        </span>
        <span class="grid-item-title">
          <h2 class="h2"><?php echo $link['title']; ?></h2>
          <?php if ($text) { ?>
          <p class="p1"><?php echo $text; ?></p>
          <?php } ?>
        </span>
      </a>
    <?php } ?>
    <?php } ?>
  </div>
</div>


<?php } elseif( get_row_layout() == 'banner' ) { ?>
<!-- Banner -->
<?php
  $type = get_sub_field('type');
  $image = get_sub_field('image');
  $video = get_sub_field('video');
  $google_map = get_sub_field('google_map');
?>
<?php if ($type == 'image') { ?>
<div class="banner-image">
  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
</div>

<?php } elseif ($type == 'video') { ?>
<div class="banner-video">
  <video autoplay loop muted preload playsinline>
    <source src="<?php echo $video['url']; ?>" type="video/mp4">
  </video>
</div>

<?php } elseif ($type == 'map') { ?>
<div class="banner-map">
  <?php echo $google_map; ?>
</div>
<?php } ?>


<?php } elseif( get_row_layout() == 'testimonials' ) { ?>
<!-- Testimonials -->
<?php
  $testimonials_title = get_sub_field('title');
?>
<div class="testimonials">

  <?php if ($testimonials_title) { ?>
  <div class="testimonials-intro scheme-light">
    <h1 class="h1"><?php echo $testimonials_title; ?></h1>
  </div>
  <?php } ?>

  <div class="testimonials-items scheme-light">
    <?php if( have_rows('items') ) { ?>
    <?php while ( have_rows('items') ) { the_row(); ?>
      <?php
        $text = get_sub_field('text');
        $citation = get_sub_field('citation');
      ?>
      <blockquote class="testimonials-item p1">
        <?php echo $text; ?>
        <?php if ($citation) { ?>
        <footer><?php echo $citation; ?></footer>
        <?php } ?>
      </blockquote>
    <?php } ?>
    <?php } ?>
  </div>
</div>


<?php } ?>
<?php } ?>
<?php } ?>