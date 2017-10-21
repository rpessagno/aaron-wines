<?php

/*
Template Name: Club
*/

get_header();

?>



<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>

<div class="intro">
  <h3 class="title"><?php the_field('intro_title'); ?></h3>
      <p><?php the_field('intro_text'); ?></p>
</div>

<div class="feature-wrap">
  <div class="feature">
    <div class="feature-content">
      <h3 class="subtitle"><?php the_field('details_title'); ?></h3>


      <?php
        $items = get_field('details_text');
        $list_items = explode("\n", $items);
        $new_items = '<ul class="text">';
        foreach($list_items as $list_item) {
          $new_items .= '<li>' . $list_item . '</li>';
        }
        $new_items .= '</ul>';
        echo $new_items;
      ?>

      <a href="/club/signup?club=5810ffaa123e3b02f087ed13" class="button">Join the Club</a>
    </div>
    <div class="feature-img" style="background-image: url('<?php the_field('detail_image'); ?>');"></div>
  </div>
</div>


<?php get_footer(); ?>