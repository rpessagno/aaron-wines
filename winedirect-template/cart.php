<?php include('inc/header.php'); ?>

<div class="winedirect-wrapper cart">


  <h1>Shopping Cart</h1>
  <p>Please review the contents of your cart. When you have finished please proceed to the check out.</p>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum maiores animi fugiat odit praesentium assumenda placeat reprehenderit obcaecati sed officia. Impedit laudantium sint pariatur sunt quisquam doloribus fugit cupiditate reprehenderit!</p>
  <hr class="dotted" style="clear:both;">
  <div id="v65-cartHeader">
    <div id="v65-cartCheckOutCoupons">
      <form method="post" action="/index.cfm?method=cart.addCouponToCart" class="v65-form">
        <fieldset>
          <legend>Have a coupon code?</legend>
          <div>
            <input type="text" name="CouponCode" id="v65-CouponCode" value=""> 
            <button type="submit" value="submit" class="modalBtn"><span>Apply Coupon</span></button> 
          </div>
        </fieldset>
      </form>
    </div>
    <div class="v65-cartCheckOutButtons">
      <a href="#" class="linkAltBtn"><span>Keep Shopping</span></a>
      <a href="/index.cfm?method=checkout.billing" class="largeLinkBtn"><span>Proceed To Checkout</span></a>
    </div>
    <div class="v65-clear">&nbsp;</div>
  </div>

  <table border="0" cellspacing="0" cellpadding="0" id="v65-couponSummaryTable">
    <tbody>
      <tr>
        <th colspan="2">Coupon summary:</th>
      </tr>
      <tr>
        <td>Case Discount:</td>
        <td style="text-align: right;">$95.40</td>
      </tr>
      <tr id="v65-couponSummaryTotal">
        <td>Total amount saved:</td>
        <td style="text-align: right;">$95.40</td>
      </tr>
    </tbody>
  </table>

  <table width="100%" border="0" cellspacing="0" cellpadding="0" id="v65-cartTable">
    <tbody>
      <tr>
        <td colspan="6" class="alert">
          Sorry, coupon code "COUPON1" does not exist or has expired.<br>
          </td>
        </tr>
      <tr>
        <th class="v65-cartItemAmount">Quantity</th>
        <th class="v65-cartItemDescription" colspan="2">Item Description</th>
        <th class="v65-cartItemAvailability center">Availability</th>
        <th class="v65-cartItemPrice right">Price</th>
        <th class="v65-cartItemTotal right">Total</th>
      </tr>
      <tr class="v65-cartItem ">
        <td class="v65-cartItemAmount">
          <form method="post" action="/index.cfm?method=cart.updateQuantity">
            <fieldset>
              <input type="hidden" name="productSKU" value="2018Product">
              <input type="text" value="2" name="quantity" class="v65-qtyField"><br>
              <button type="submit" value="submit" class="modalBtn"><span>Update</span></button>
            </fieldset>
          </form>
        </td>
        <td class="v65-cartItemImage">
          <a href="#" data-sku="2018Product"><img src="assets/images/product/bottle.png" alt="" border="0"></a>
        </td>
        <td class="v65-cartItemDescription">
          <a href="#" data-sku="2018Product"><strong>2018 Product</strong></a><span class="v65-cartItemDescription-sku"><br>
          750ml<span class="small"> - SKU 2018Product</span></span><br>
          <a href="/index.cfm?method=cart.removeItem&amp;productSKU=2018Product" class="modalLinkAltBtn v65-cartRemoveButton"><span>Remove</span></a>
        </td>
        <td class="v65-cartItemInStock center">In Stock</td>
        <td class="v65-cartItemPrice right">
          $75.00    
        </td>
        <td class="v65-cartItemTotal right">$150.00</td>
      </tr>
      <tr class="v65-cartItem ">
        <td class="v65-cartItemAmount">
          <form method="post" action="/index.cfm?method=cart.updateQuantity">
            <fieldset>
              <input type="hidden" name="productSKU" value="2018Product">
              <input type="text" value="2" name="quantity" class="v65-qtyField"><br>
              <button type="submit" value="submit" class="modalBtn"><span>Update</span></button>
            </fieldset>
          </form>
        </td>
        <td class="v65-cartItemImage">
          <a href="#" data-sku="2018Product"><img src="assets/images/product/bottle.png" alt="" border="0"></a>
        </td>
        <td class="v65-cartItemDescription">
          <a href="#" data-sku="2018Product"><strong>2018 Product</strong></a><span class="v65-cartItemDescription-sku"><br>
          750ml<span class="small"> - SKU 2018Product</span></span><br>
          <a href="/index.cfm?method=cart.removeItem&amp;productSKU=2018Product" class="modalLinkAltBtn v65-cartRemoveButton"><span>Remove</span></a>
        </td>
        <td class="v65-cartItemInStock center">In Stock</td>
        <td class="v65-cartItemPrice right">
          $75.00    
        </td>
        <td class="v65-cartItemTotal right">$150.00</td>
      </tr>
      <tr class="v65-cartItem ">
        <td class="v65-cartItemAmount">
          <form method="post" action="/index.cfm?method=cart.updateQuantity">
            <fieldset>
              <input type="hidden" name="productSKU" value="2018Product">
              <input type="text" value="2" name="quantity" class="v65-qtyField"><br>
              <button type="submit" value="submit" class="modalBtn"><span>Update</span></button>
            </fieldset>
          </form>
        </td>
        <td class="v65-cartItemImage">
          <a href="#" data-sku="2018Product"><img src="assets/images/product/bottle.png" alt="" border="0"></a>
        </td>
        <td class="v65-cartItemDescription">
          <a href="#" data-sku="2018Product"><strong>2018 Product</strong></a><span class="v65-cartItemDescription-sku"><br>
          750ml<span class="small"> - SKU 2018Product</span></span><br>
          <a href="/index.cfm?method=cart.removeItem&amp;productSKU=2018Product" class="modalLinkAltBtn v65-cartRemoveButton"><span>Remove</span></a>
        </td>
        <td class="v65-cartItemInStock center">In Stock</td>
        <td class="v65-cartItemPrice right">
          $75.00    
        </td>
        <td class="v65-cartItemTotal right">$150.00</td>
      </tr>
      <tr id="v65-cartSubtotal">
        <td class="v65-cartSubtotal-1">&nbsp;</td>
        <td class="v65-cartSubtotal-2">&nbsp;</td>
        <td class="bold red v65-cartSubtotal-3">&nbsp;</td>
        <td class="v65-cartSubtotal-4">&nbsp;</td>
        <td class="right v65-cartSubtotal-5">Subtotal</td>
        <td class="right v65-cartSubtotal-6">$150.00</td>
      </tr>
      <!--Shipping-->
      <tr class="v65-cartTax" id="v65-cartShippingStates">
        <td class="v65-cartTax-1">&nbsp;</td>
        <td class="v65-cartTax-2">&nbsp;</td>
        <td class="v65-cartTax-3">&nbsp;</td>
        <td class="v65-cartTax-4">&nbsp;</td>
        <td class="right v65-cartTax-5">
          Shipping
          <form action="/index.cfm?method=cart.changeShippingState" method="post" style="display:inline;">
            <select name="StateCode" id="v65-cartStateCode" onchange="this.form.submit();">
              <option value="">--</option>
              <option value="AL">AL</option>
              <option value="AK">AK</option>
              <option value="AZ">AZ</option>
              <option value="AR">AR</option>
              <option value="CA">CA</option>
              <option value="CO">CO</option>
              <option value="CT">CT</option>
              <option value="DE">DE</option>
              <option value="DC">DC</option>
              <option value="FL">FL</option>
              <option value="GA">GA</option>
              <option value="HI">HI</option>
              <option value="ID">ID</option>
              <option value="IL">IL</option>
              <option value="IN">IN</option>
              <option value="IA">IA</option>
              <option value="KS">KS</option>
              <option value="KY">KY</option>
              <option value="LA">LA</option>
              <option value="ME">ME</option>
              <option value="MD">MD</option>
              <option value="MA">MA</option>
              <option value="MI">MI</option>
              <option value="MN">MN</option>
              <option value="MS">MS</option>
              <option value="MO">MO</option>
              <option value="MT">MT</option>
              <option value="NE">NE</option>
              <option value="NV">NV</option>
              <option value="NH">NH</option>
              <option value="NJ">NJ</option>
              <option value="NM">NM</option>
              <option value="NY">NY</option>
              <option value="NC">NC</option>
              <option value="ND">ND</option>
              <option value="OH">OH</option>
              <option value="OK">OK</option>
              <option value="OR">OR</option>
              <option value="PA">PA</option>
              <option value="RI">RI</option>
              <option value="SC">SC</option>
              <option value="SD">SD</option>
              <option value="TN">TN</option>
              <option value="TX">TX</option>
              <option value="UT">UT</option>
              <option value="VT">VT</option>
              <option value="VA">VA</option>
              <option value="WA">WA</option>
              <option value="WV">WV</option>
              <option value="WI">WI</option>
              <option value="WY">WY</option>
            </select>
          </form>
        </td>
        <td class="right v65-cartTax-6">---</td>
      </tr>
      <!--/Shipping-->
      <!--Cart Tax-->
      <!--/Cart Tax-->
      <!--Cart Tax-->
      <!--/Cart Tax-->
      <!--Cart Tax-->
      <!--/Cart Tax-->  
      <!--Cart Tax-->
      <!--/Cart Tax-->      
      <!--Cart Tax-->
      <!--/Cart Tax-->      
      <!--Cart Tax-->
      <!--/Cart Tax-->          
      <!--Cart Total-->
      <tr id="v65-cartTotal">
        <td class="v65-cartTotal-1">&nbsp;</td>
        <td class="v65-cartTotal-2">&nbsp;</td>
        <td class="v65-cartTotal-3">&nbsp;</td>
        <td class="v65-cartTotal-4">&nbsp;</td>
        <td class="right v65-cartTotal-5">Total</td>
        <td class="right v65-cartTotal-6">$150.00</td>
      </tr>
      <!--/Cart Total-->
    </tbody>
  </table>
  <!--/Cart-->
  <div id="v65-cartFooter">
    <div id="v65-cartPaymentOptions">
      <img src="https://s3.amazonaws.com/assetss3.vin65.com/images/checkout/Visa.gif" alt="Visa">
      <img src="https://s3.amazonaws.com/assetss3.vin65.com/images/checkout/MasterCard.gif" alt="MasterCard">
      <img src="https://s3.amazonaws.com/assetss3.vin65.com/images/checkout/AmericanExpress.gif" alt="AmericanExpress">
    </div>
    <div class="v65-cartCheckOutButtons">
      <a href="#" class="linkAltBtn"><span>Keep Shopping</span></a>
      <a href="/index.cfm?method=checkout.billing" class="largeLinkBtn"><span>Proceed To Checkout</span></a>
    </div>
    <div class="v65-clear">&nbsp;</div>
  </div>








</div> <!-- .winedirect-wrapper -->
<?php include('inc/footer.php'); ?>