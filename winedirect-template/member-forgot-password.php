<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">


  <div class="member">
    <!-- Output by WineDirect -->

        <h1>Forgot Password?</h1>
        
        <p>Please fill in the form below and we will email your password to you.</p>

        <p>&nbsp;</p>

        <h3>Retrieve Password</h3>

        <form class="v65-form" method="post" id="v65-forgotPasswordForm" action="/index.cfm?method=memberlogin.processForgot">
          <fieldset>  
            <legend>Forgot Password</legend>
            
            <div>
              <label for="email">Email</label>
              <input type="text" name="Email" style="width: 150px;">
            </div>
            
            <div v65js="googleRecaptcha" class="v65-formRecaptcha googleRecaptchaInUse" id="googleRecaptchaForgot"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdQvBYTAAAAAP5Oi5g9ScTmALNxw3QegVXko56Q&amp;co=aHR0cHM6Ly9zaG9wLm1pY2hhZWxkYXZpZHdpbmVyeS5jb206NDQz&amp;hl=en&amp;v=v1515997865826&amp;size=normal&amp;cb=ghhp2lb1d0ox" width="304" height="78" role="presentation" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
            
            <div id="fieldsetSubmit">
              <button type="submit" value="submit" class="defaultBtn"><span>Submit</span></button>
            </div>
            
          </fieldset>
        </form>


    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>






