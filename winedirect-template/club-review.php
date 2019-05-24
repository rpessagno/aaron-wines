<?php include('inc/header.php'); ?>
<div class="winedirect-wrapper checkout">





<h1>Red Wine Club</h1>
<p>This is your ‘club teaser.’ This is not edited through the content editor, but instead through your club managemtn tools. <a href="http://documentation.vin65.com/Store/Clubs/Club-Setup" target="_blank">Learn how to edit this text here »</a></p>
<p>Mauris ut nisi at diam porta dapibus at et urna. Suspendisse sodales euismod diam, ac tristique nisi lacinia a. Sed suscipit fringilla est, in vestibulum purus faucibus eget.</p>
<div class="v65-clear">&nbsp;</div>
<hr class="dotted">
<div class="alertYellow">
  Almost done!<br><strong>Your club order has NOT yet been placed.</strong> Please review your order and click "PLACE MY CLUB ORDER" below!
</div>
<p>&nbsp;</p>
<!--Check Out Buttons-->
<div class="floatRight">
  <form method="post" action="/index.cfm?method=clubs.processClub" class="v65ProcessOrder">
    <button type="submit" data-text="Processing...Please Wait" class="largeBtn"><span>Place My Club Order</span></button>
  </form>
</div>
<!--/Check Out Buttons-->
<p>Please check all the information below to be sure it's correct.<br><strong>This form is SSL Secure.</strong></p>
<div id="v65-clubSummaryWrapper">
  <div id="v65-clubBillingSummary">
    <h4>Bill To:</h4>
    <p>
      Robert  Pessagno <br> 1141 Loreto Court <br> Grover Beach , CA <br> 93433 
    </p>
    <p>
      Phone: 8315946814<br>
      Email: robert@makersandalliez.com 
      <br>Birth Date: 02/05/1906 
    </p>
    <p>
      <strong>Payment Method</strong><br>
      Credit Card <br>
      ************1111<br>
      Expiration Date: 04/2020
    </p>
    <p><a href="/index.cfm?method=clubs.clubSignup&amp;clubID=B3677BE4-A6AF-E977-019E-9258A06A88C2">Edit Billing &amp; Shipping info for this order.</a></p>
  </div>
  <div id="v65-clubShippingSummary">
    <h4>Ship To:</h4>
    <p>Ship to Billing Address</p>
  </div>
  <div id="v65-reviewClubSummaryWrapper">
    <p>This is your ‘club description.’ This is not edited through the content editor, but instead through your club management tools. <a href="http://documentation.vin65.com/Store/Clubs/Club-Setup" target="_blank">Learn how to edit this text here »</a></p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque elementum erat at ipsum mollis eget tincidunt lacus laoreet. Morbi sit amet rutrum massa. Vivamus vel eros purus.</p>
    <p>Quisque aliquet magna sed tellus gravida aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent nec purus eget nibh viverra hendrerit. Proin in lectus mi, eget lobortis massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    <ul>
      <li>Benefit One</li>
      <li>Benefit Two</li>
      <li>Benefit Three</li>
    </ul>
    <p>Vivamus risus nibh, vulputate sed porttitor nec, dapibus nec risus. Ut dictum interdum laoreet. Ut id vulputate nisl. Suspendisse imperdiet tempus tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse egestas lacus nec risus consequat ac sagittis nunc ultricies. Vivamus a nibh ante.</p>
  </div>
</div>
<hr class="dotted">
<div id="v65-checkoutFooter">
  <div id="v65-checkoutSecure">
    <img src="https://s3.amazonaws.com/assetss3.vin65.com/images/checkout/lock.png" width="16" height="16" alt="Your order is safe and secure" class="verticalMiddle"> Your order is safe and secure
  </div>
  <div class="floatRight">
    <form method="post" action="/index.cfm?method=clubs.processClub" class="v65ProcessOrder">
      <button type="submit" data-text="Processing...Please Wait" class="largeBtn"><span>Place My Club Order</span></button>
    </form>
  </div>
</div>




</div>
<?php include('inc/footer.php'); ?>