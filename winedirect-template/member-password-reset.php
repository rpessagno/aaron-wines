<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">


  <div class="member">
    <!-- Output by WineDirect -->
<h1>Reset Password</h1>

<p>To reset your password please complete the form below.</p>

<style type="text/css">.member-nav { display: none; } </style> 
  <h3>Reset Password</h3>
  
  <form class="v65-form" method="post" id="v65-resetPasswordForm" action="/index.cfm?method=memberlogin.resetPasswordSuccess">
    <fieldset> 
      <legend>Reset Password</legend>
      <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" style="width: 150px;">
      </div>
      <div>
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" id="confirmPassword" name="confirmPassword" style="width: 150px;">
        <progress id="strengthMeter" max="100" value="0"></progress>
        <div id="checks" class="checks-container"></div>
        
<style type="text/css">
  .checks-container {
    width: 100%;
    margin: 0 auto;
    text-align: left;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
      -ms-flex-direction: column;
        flex-direction: column;
    -webkit-box-align: center;
      -ms-flex-align: center;
        align-items: center;
  }
  
  .checks {
    position: relative;
    width: 100%;
    visibility: hidden;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
      -ms-flex-align: center;
        align-items: center;
  }
  
  .checks .reasons {padding-left: 1rem;}
  
  .checks .fa {
    position: absolute;
    font-size: .75rem;
  }
  
  .checks.error {
    color: tomato;
    visibility: visible;
  }
  
  .checks.error .fa-check {visibility: hidden;}
  
  .checks.success {
    color: limegreen;
    visibility: visible;
  }
  
  .checks.success .fa-exclamation-circle {visibility: hidden;}
  
  progress {
    appearance: none;
    -moz-appearance: none;
    -webkit-appearance: none;
    border: none;
    background-size: auto;
    width: 100% !important;
    height: 5px;
    margin: 0;
    background: white;
  }
  
  progress::-webkit-progress-bar {background: white;}
  
  .progress-red::-webkit-progress-value {background: tomato;}
  .progress-red::-moz-progress-bar {background: tomato;}
  .progress-red {color: tomato;}
  
  .progress-yellow::-webkit-progress-value {background: orange;}
  .progress-yellow::-moz-progress-bar {background: orange;}
  .progress-yellow {color: orange;}
  
  .progress-green::-webkit-progress-value {background: limegreen;}
  .progress-green::-moz-progress-bar {background: limegreen;}
  .progress-green {color: limegreen;}
</style>



      </div>
      <div id="fieldsetSubmit">
        <button type="submit" value="submit" class="defaultBtn"><span>Submit</span></button>
      </div>
    </fieldset>
  </form>


    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>






