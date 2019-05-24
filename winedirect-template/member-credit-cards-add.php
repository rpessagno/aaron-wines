<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">

  <?php include('inc/member-nav.php'); ?>


  <div class="member">
    <!-- Output by WineDirect -->

     <h1>Edit Credit Card</h1>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia excepturi, velit earum explicabo pariatur quibusdam quasi. Quidem possimus quam illo. Dolorem ipsa ipsam unde culpa molestias totam voluptatum quam dignissimos.</em><br>
      &nbsp;</p> 
        <ul>
        
          <li class="error">You must enter a credit card type.</li>
        
          <li class="error">You must enter a valid credit card number.</li>
        
          <li class="error">Your credit card number did not pass our mod 10 check.</li>
        
          <li class="error">You must enter a credit card expiry month.</li>
        
          <li class="error">You must enter a credit card expiry year.</li>
        
          <li class="error">You must enter a name on the card.</li>
        
        </ul>

            


      <div id="v65-memberFormWrapper">
      <form method="post" class="v65-form" action="/index.cfm?method=memberCreditCards.ProcessEditCreditCard">
        <fieldset>
          <legend>Payment Method</legend>
          <div>
            <label for="creditCardType"><span class="red">*</span>Credit Card Type</label>
            <select name="creditCardType">
              <option value=""></option>
              
                <option value="Visa">Visa</option>
              
                <option value="MasterCard">Master Card</option>
              
                <option value="AmericanExpress">American Express</option>
              
                <option value="Discover">Discover Card</option>
              
            </select>
          </div>
          
          <div>
            <label for="CardNumber"><span class="red">*</span>Card Number</label>
            <input type="text" name="CardNumber" value="" style="width: 175px;" autocomplete="off">
          </div>  
          
          <div>
            <label for="cardExpiryMo"><span class="red">*</span>Expiration Date</label>
            <select name="CardExpiryMo" id="v65-cardExpiryMo">
              <option value="">--</option>
              
              <option value="01">January</option>
              
              <option value="02">February</option>
              
              <option value="03">March</option>
              
              <option value="04">April</option>
              
              <option value="05">May</option>
              
              <option value="06">June</option>
              
              <option value="07">July</option>
              
              <option value="08">August</option>
              
              <option value="09">September</option>
              
              <option value="10">October</option>
              
              <option value="11">November</option>
              
              <option value="12">December</option>
              
            </select>
            <select name="CardExpiryYr" id="v65-cardExpiryYr">
              <option value="">--</option>
              
              <option value="2018">2018</option>
              
              <option value="2019">2019</option>
              
              <option value="2020">2020</option>
              
              <option value="2021">2021</option>
              
              <option value="2022">2022</option>
              
              <option value="2023">2023</option>
              
              <option value="2024">2024</option>
              
              <option value="2025">2025</option>
              
              <option value="2026">2026</option>
              
              <option value="2027">2027</option>
              
              <option value="2028">2028</option>
              
            </select> 
          </div>
          
          <div>
            <label for="NameOnCard"><span class="red">*</span>Name On Card</label>
            <input type="text" name="NameOnCard" value="" style="width: 175px;">
          </div>
          
          <div>
            <input type="checkbox" name="isPrimary" value="1">
            <label for="isPrimary">Primary Card</label>
          </div>  

          


            
          <div><button type="submit" value="submit" class="defaultBtn"><span>Submit</span></button></div>
          
        </fieldset>
      </form>

      </div>


    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>