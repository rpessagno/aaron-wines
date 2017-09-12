<div class="shop" data-vsPlugin="productList" id="shop">

  <script type="text/html" id="shop-custom">
    <div data-bind="foreach: parentProducts" class="shop-items">
      
      <!-- ko if: Custom1 == '<?php echo $filter; ?>' -->
      <div class="shop-item">
        <a data-bind="attr: { href: '/shop/product/?item=' + Tag }"><img data-bind="attr: { alt: Title, src: DetailImageUrl }" class="shop-item-img"></a>
        <h2 class="shop-item-title"><a data-bind="text: Title, attr: { href: '/shop/product/?item=' + Tag }"></a></h2>
        <h3 class="shop-item-price" data-bind="text: '$' + Price"></h3>
        <div class="cart" data-bind="template: 'vs2-productList-addToCart-default'"></div>
      </div>
      <!-- /ko -->

    </div>
  </script>
  
</div>
