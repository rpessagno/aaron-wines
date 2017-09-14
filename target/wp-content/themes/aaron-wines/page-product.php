<?php

/*
Template Name: Product Detail
*/

get_header();

?>



<div data-vsPlugin="productDetail" id="product" class="vinespring">

  <script type="text/html" id="product-custom">
    <div class="product" data-bind="with: product">
      <div class="product-img">
        <img data-bind="attr: { alt: Title, src: DetailImageUrl }">
      </div>
      <div class="product-content">
        <h1 class="product-title subtitle" data-bind="text: Title"></h1>
        <h3 class="product-price subtitle2" data-bind="text: '$' + Price"></h3>
        <div class="cart" data-bind="template: 'vs2-productList-addToCart-default'"></div>
        <div class="product-description text" data-bind="html: Description.replace(/\n/g,'<br>')"></div>
        <ul class="vs2-productDetail-attributes text" data-bind="foreach: AttributeList &amp;&amp; AttributeList.split('\n')">
          <li data-bind="html: $data"></li>
        </ul>
      </div>
    </div>
  </script>

</div>




<?php include('inc/wine-club-banner.php'); ?>


<?php get_footer(); ?>