<?php

/*
Template Name: Product Detail
*/

get_header();

?>



<div data-vsPlugin="productDetail" id="product" class="product">
  <noscript>
    JavaScript is required to view and purchase our products.<br>
    Please <a href="http://www.enable-javascript.com/" target="_blank">enable this feature in your browser.</a>
  </noscript>

  <script type="text/html" id="product-custom">
    <div class="product" data-bind="with: product">
      <div class="product-img">
        <img class="product-img" data-bind="attr: { alt: Title, src: DetailImageUrl }">
      </div>
      <div class="product-content">
        <h1 class="product-title" data-bind="text: Title"></h1>
        <p class="product-price" data-bind="text: '$' + Price"></p>
        <div class="cart" data-bind="template: 'vs2-productList-addToCart-default'"></div>
        <div class="product-description" data-bind="html: Description.replace(/\n/g,'<br>')"></div>
      </div>
    </div>
  </script>

</div>




<?php include('inc/wine-club-banner.php'); ?>


<?php get_footer(); ?>