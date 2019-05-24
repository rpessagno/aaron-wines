<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">

  <?php include('inc/member-nav.php'); ?>
  

  <div class="member">
    <!-- Output by WineDirect -->

    <h1>Product Allocations</h1>
      <div class="v65-memberAllocationWrapper">
        <h2>Demo Allocation</h2>
        <p class="v65-allocationDates"> <span class="v65-allocationEndDate">End Date: <strong>Jul 5, 2017</strong>&nbsp;&nbsp; </span> <span class="v65-allocationShipDate">Ship Date: <strong>Jul 6, 2017</strong> </span> <span class="v65-allocationMinBottlesPerOrder">Minimum Order Qty: <strong>2</strong> </span> </p>
        <form method="post" action="/index.cfm?method=cart.allocationAddToCart">
          <input name="AllocationID" value="C8FD6B2C-D1F3-6636-25FF-EB544BA6ED7C" type="hidden">
          <input name="abTest" value="List" type="hidden">
          <input name="productSKU" value="23610" type="hidden">
          <input name="productCategoryID" value="B1E0FF60-B5DE-B2CE-C008-C6CD85A7888E" type="hidden">
          <div class="v65-memberAllocationDetails">
            <div class="v65-memberAllocationImage"> <img src="assets/images/product/bottle.png" alt="Chardonnay Reserve '10" border="0"> </div>
            <div class="v65-memberAllocationTeaser">
              <h3>Chardonnay Reserve '10 <span class="v65-storeAllocationSKU">(23610)</span></h3>
              <table class="v65-memberAllocationTable" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr class="v65-memberAllocationMinimumOrder">
                    <td class="label">Minimum Order Qty</td>
                    <td>1</td>
                  </tr>
                  <tr class="v65-memberAllocationTotalAllocation">
                    <td class="label">Your Total Allocation</td>
                    <td>12</td>
                  </tr>
                  <tr class="v65-memberAllocationPrevPurchased">
                    <td class="label">Amount Prev Purchased</td>
                    <td>0</td>
                  </tr>
                  <tr class="v65-memberAllocationAmount">
                    <td class="label">Order Amount</td>
                    <td><input name="Quantity5F3E4A48-F2D6-3543-18E5-611994371935" value="1" style="width:50px;" type="text"></td>
                  </tr>
                  <tr class="v65-memberAllocationWishList">
                    <td class="label lastRow">Request Amount<br>
                      Above Your Allocation of 12</td>
                    <td class="lastRow"><input name="wishQuantity5F3E4A48-F2D6-3543-18E5-611994371935" value="0" style="width:50px;" type="text"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div style="float:right;">
            <button type="submit" value="submit" class="defaultBtn"><span>Add Allocation To Cart</span></button>
          </div>
        </form>
      </div>

      <div class="v65-memberAllocationWrapper">
        <h2>Demo Allocation</h2>
        <p class="v65-allocationDates"> <span class="v65-allocationEndDate">End Date: <strong>Jul 5, 2017</strong>&nbsp;&nbsp; </span> <span class="v65-allocationShipDate">Ship Date: <strong>Jul 6, 2017</strong> </span> <span class="v65-allocationMinBottlesPerOrder">Minimum Order Qty: <strong>2</strong> </span> </p>
        <form method="post" action="/index.cfm?method=cart.allocationAddToCart">
          <input name="AllocationID" value="C8FD6B2C-D1F3-6636-25FF-EB544BA6ED7C" type="hidden">
          <input name="abTest" value="List" type="hidden">
          <input name="productSKU" value="23610" type="hidden">
          <input name="productCategoryID" value="B1E0FF60-B5DE-B2CE-C008-C6CD85A7888E" type="hidden">
          <div class="v65-memberAllocationDetails">
            <div class="v65-memberAllocationImage"> <img src="assets/images/product/bottle.png" alt="Chardonnay Reserve '10" border="0"> </div>
            <div class="v65-memberAllocationTeaser">
              <h3>Chardonnay Reserve '10 <span class="v65-storeAllocationSKU">(23610)</span></h3>
              <table class="v65-memberAllocationTable" cellspacing="0" cellpadding="0" border="0">
                <tbody>
                  <tr class="v65-memberAllocationMinimumOrder">
                    <td class="label">Minimum Order Qty</td>
                    <td>1</td>
                  </tr>
                  <tr class="v65-memberAllocationTotalAllocation">
                    <td class="label">Your Total Allocation</td>
                    <td>12</td>
                  </tr>
                  <tr class="v65-memberAllocationPrevPurchased">
                    <td class="label">Amount Prev Purchased</td>
                    <td>0</td>
                  </tr>
                  <tr class="v65-memberAllocationAmount">
                    <td class="label">Order Amount</td>
                    <td><input name="Quantity5F3E4A48-F2D6-3543-18E5-611994371935" value="1" style="width:50px;" type="text"></td>
                  </tr>
                  <tr class="v65-memberAllocationWishList">
                    <td class="label lastRow">Request Amount<br>
                      Above Your Allocation of 12</td>
                    <td class="lastRow"><input name="wishQuantity5F3E4A48-F2D6-3543-18E5-611994371935" value="0" style="width:50px;" type="text"></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div style="float:right;">
            <button type="submit" value="submit" class="defaultBtn"><span>Add Allocation To Cart</span></button>
          </div>
        </form>
      </div>

  
    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>

