<?php

/*
Template Name: Contact
*/

get_header();

?>




<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');"></div>


<div class="intro">
  <h2 class="title">Contact Us</h2>
  <p><?php the_field('intro'); ?></p>
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="58"]'); ?>
  </div>
</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.087815563636!2d-120.69268168474397!3d35.576224280218874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80ecdf8b390c4549%3A0x5be26b849cd0232c!2sAaron+Wines!5e0!3m2!1sen!2sus!4v1513388072769" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen class="map"></iframe>

<?php get_footer(); ?>