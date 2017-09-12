<div class="shop-grid-item" data-vsPlugin="productList" id="shop">

  <noscript>
    JavaScript is required to view and purchase our products.
    Please <a href="http://www.enable-javascript.com/" target="_blank">enable this feature in your browser.</a>
  </noscript>

  <script type="text/html" id="shop-custom">
    <div data-bind="foreach: parentProducts" class="shop-items">
      
      <!-- ko if: Custom1 == '<?php echo $filter; ?>' -->
      <div class="shop-item">
        <a data-bind="attr: { href: '/shop/detail/?item=' + Tag }"><img data-bind="attr: { alt: Title, src: ListImageUrl }" class="shop-item-img"></a>
        <h2 class="shop-item-title"><a data-bind="text: Title, attr: { href: '/shop/detail/?item=' + Tag }"></a></h2>
        <h3 class="shop-item-price" data-bind="text: Price"></h3>
        <div class="cart" data-bind="template: 'vs2-productList-addToCart-default'"></div>
      </div>
      <!-- /ko -->

    </div>
  </script>
  
</div>
