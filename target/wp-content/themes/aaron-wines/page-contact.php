<?php

/*
Template Name: Contact
*/

get_header();

?>




<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
  <h1>Contact Us</h1>
</div>


<div class="intro">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum repellat voluptatum, debitis cumque quo repellendus qui maxime reiciendis excepturi deserunt possimus, ratione doloremque sunt dolor dolore eligendi vel eaque ut?</p>
  <div class="contact-form">
    <?php echo do_shortcode('[contact-form-7 id="58"]'); ?>
  </div>
</div>



<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d103842.88565321441!2d-120.69022000000001!3d35.576166!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80ecc4bfc3f655b7%3A0xcc848b0559d1a142!2s3050+Limestone+Way%2C+Paso+Robles%2C+CA+93446!5e0!3m2!1sen!2sus!4v1505259956257" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen class="contact-map"></iframe>



<?php get_footer(); ?>