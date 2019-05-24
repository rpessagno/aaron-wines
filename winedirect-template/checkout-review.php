<?php include('inc/header.php'); ?>
<div class="winedirect-wrapper checkout">





<h1>Review Your Order</h1>
<div class="v65-clear">&nbsp;</div>

<div class="alertYellow">
  Almost done! ~ <strong>Your order has NOT yet been placed.</strong> Please review your order and click "PLACE MY ORDER" below!
</div>

<hr class="dotted">
<div class="floatRight">
  <form method="post" action="/index.cfm?method=checkout.processOrder" class="v65ProcessOrder">
    <button type="submit" data-text="Processing...Please Wait" class="largeBtn"><span>Place My Order</span></button>
  </form>
</div>
<p>Please check all the information below to be sure it's correct.<br><strong>This form is SSL Secure.</strong></p>
<div id="v65-orderSummaryWrapper">
  <div id="v65-billingSummary">
    <h4>Bill To:</h4>
    <p>
      Robert  Pessagno <br> 1141 Loreto Court <br> Grover Beach , CA <br> 93433 
    </p>
    <p>
      Phone: (831) 594-6814<br>
      Email: robert@makersandallies.com
    </p>
    <p><strong>Payment Method</strong><br>
      Visa<br>
      ************1111 
      ($75.00)  
    </p>
    <p><strong>Order Notes</strong><br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere quos voluptas, molestiae sapiente numquam asperiores nihil assumenda necessitatibus quis neque unde illum placeat magnam rerum saepe facilis non corporis in.
    </p>
  </div>
  <div id="v65-shippingSummary">
    <h4>Ship To:</h4>
    <p>
      Robert  Pessagno <br> 1141 Loreto Court <br> Grover Beach , CA <br> 93433 
    </p>
    <p>Phone: (831) 594-6814<br>
      Email: robert@makersandallies.com
    </p>
  </div>
</div>
<p><a href="/index.cfm?method=checkout.billing">Edit Billing &amp; Shipping info for this order.</a></p>
<hr class="dotted">
<table width="100%" border="0" cellspacing="0" cellpadding="0" id="v65-cartTable">
  <tbody>
    <tr>
      <th class="v65-cartItemAmount center">Qty</th>
      <th class="v65-cartItemDescription" colspan="2">Item Description</th>
      <th class="v65-cartItemPrice right">Price</th>
      <th class="v65-cartItemTotal right">Total</th>
    </tr>
    <!--Cart Items-->
    <tr>
      <td class="v65-cartItem center">1</td>
      <td class="cartItemImage">
        <img src="/assets/images/product/bottle.png" alt="">
      </td>
      <td class="cartItemDescription">
        <strong>2018 Product</strong><br>
        750ml SKU 2018Product<br>
      </td>
      <td class="v65-cartItemPrice right">
        $75.00      
      </td>
      <td class="v65-cartItemTotal right">$75.00</td>
    </tr>
    <tr>
      <td class="v65-cartItem center">1</td>
      <td class="cartItemImage">
        <img src="/assets/images/product/bottle.png" alt="">
      </td>
      <td class="cartItemDescription">
        <strong>2018 Product</strong><br>
        750ml SKU 2018Product<br>
      </td>
      <td class="v65-cartItemPrice right">
        $75.00      
      </td>
      <td class="v65-cartItemTotal right">$75.00</td>
    </tr>
    <tr>
      <td class="v65-cartItem center">1</td>
      <td class="cartItemImage">
        <img src="/assets/images/product/bottle.png" alt="">
      </td>
      <td class="cartItemDescription">
        <strong>2018 Product</strong><br>
        750ml SKU 2018Product<br>
      </td>
      <td class="v65-cartItemPrice right">
        $75.00      
      </td>
      <td class="v65-cartItemTotal right">$75.00</td>
    </tr>
    <!--/Cart Items-->
    <!--Cart Subtotal-->
    <tr id="v65-cartSubtotal">
      <td class="v65-cartSubtotal-1">&nbsp;</td>
      <td class="v65-cartSubtotal-2 bold red">&nbsp;</td>
      <td class="v65-cartSubtotal-3">&nbsp;</td>
      <td class="v65-cartSubtotal-4 right">Subtotal</td>
      <td class="v65-cartSubtotal-5 right">$75.00</td>
    </tr>
    <!--/Cart Subtotal-->
    <!--Cart Tax-->
    <tr class="v65-cartTax">
      <td class="v65-cartTax-1">&nbsp;</td>
      <td class="v65-cartTax-2">&nbsp;</td>
      <td class="v65-cartTax-3">&nbsp;</td>
      <td class="v65-cartTax-4 right">
        Shipping    
      </td>
      <td class="v65-cartTax-5 right">$0.00</td>
    </tr>
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
    <!--Cart Tax-->
    <!--/Cart Tax-->      
    <!--Cart Total-->
    <tr id="v65-cartTotal">
      <td class="v65-cartTotal-1">&nbsp;</td>
      <td class="v65-cartTotal-2">&nbsp;</td>
      <td class="v65-cartTotal-3">&nbsp;</td>
      <td class="v65-cartTotal-4 right">Total</td>
      <td class="v65-cartTotal-5 right">$75.00</td>
    </tr>
    <!--/Cart Total-->
  </tbody>
</table>
<div id="v65-checkoutFooter">
  <div id="v65-checkoutSecure"><img src="https://s3.amazonaws.com/assetss3.vin65.com/images/checkout/lock.png" width="16" height="16" alt="Your order is safe and secure" class="verticalMiddle"> Your order is safe and secure</div>
  <div id="v65-continueOrder">
    <form method="post" action="/index.cfm?method=checkout.processOrder" class="v65ProcessOrder">
      <button type="submit" data-text="Processing...Please Wait" class="largeBtn"><span>Place My Order</span></button>
    </form>
  </div>
</div>





</div>
<?php include('inc/footer.php'); ?>