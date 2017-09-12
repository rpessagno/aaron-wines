<div class="shop-item">
  <a data-bind="attr: { href: '/shop/detail/?item=' + Tag }" href="/shop/detail/?item=2014-trespasser"><img data-bind="attr: { alt: Title, src: ListImageUrl }" class="shop-item-img" alt="2014 Trespasser" src="https://s3-us-west-2.amazonaws.com/vinespring-public/products/57f6dbdf123e3b08a4e4e467/bottle.jpg"></a>

  <h2 class="shop-item-title"><a data-bind="text: Title, attr: { href: '/shop/detail/?item=' + Tag }" href="/shop/detail/?item=2014-trespasser">2014 Trespasser</a></h2>

  <h3 class="shop-item-price" data-bind="text: Price">$28</h3>

  <div class="cart" data-bind="template: 'vs2-productList-addToCart-default'">
    <form data-bind="submit: vinespring.addToCart">
      <div class="vs2-productList-subs" data-bind="foreach: $root.subProducts($data, true)">
        <div class="vs2-productList-sub" data-bind="if: AllowOrder &amp;&amp; !SoldOut &amp;&amp; !IsAllocated">
          <input type="hidden" name="id" data-bind="value: Id" value="59b81ce4123e3b0a0cbf853f">
          <span class="vs2-productList-bottleSize" data-bind="text: BottleSize"></span>
          <span class="vs2-productList-price" data-bind="money: Price">$48.00</span>
          <span class="vs2-productList-quantity">
            <!--ko if: $root.useQuantityDropdown($data)-->
            <select class="vs2-productList-quantity-dropdown" name="quantity" data-bind="options: $root.itemQuantities($data)"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option></select>
            <!--/ko-->
            <!--ko ifnot: $root.useQuantityDropdown($data)--><!--/ko-->
          </span>
        </div>
        <div class="vs2-productList-soldOut" data-bind="if: SoldOut"></div>
        <div class="vs2-productList-notAvailable" data-bind="if: !SoldOut &amp;&amp; (!AllowOrder || IsAllocated)"></div>
      </div>
      <div class="vs2-productList-addToCart" data-bind="if: $root.showAddToCart($data)">
        <button type="submit">Add to cart</button>
      </div>
    </form>
  </div>


</div>