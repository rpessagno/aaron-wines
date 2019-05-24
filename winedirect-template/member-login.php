<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">


  <div class="member">
    <!-- Output by WineDirect -->

    <div class="member">
      <h1>Member Login</h1>

      <div id="v65-LoginFormWrapper">

        <form method="post" class="v65-form" name="login" id="v65-loginForm" action="/index.cfm?method=memberlogin.processLogin">   
          <input type="hidden" name="referrerQueryString" value="method=memberEditAccount.editProfile">
          
          <fieldset>  
            
            <legend>Log In</legend>
            
            <div>
            <label for="username">Username or Email</label>
            <input type="text" name="username" value="" style="width: 175px;">
            </div>
            
            <div>
            <label for="password">Password</label>
            <input type="Password" name="password" value="" style="width: 175px;">
            </div>
            
            
            <div>
            <input type="checkbox" name="rememberMe" id="rememberMe" value="1">
              
                <label for="rememberMe">Remember Me</label>
              
            </div>
                  
            
            <div>
              <button type="submit" value="submit" class="defaultBtn"><span>Log In</span></button>
            </div>
            
          </fieldset>
          
        </form>

      </div>

      <p>Forgot your username or password? <a href="#" id="v65-modalForgotPasswordLink">Click Here</a></p>


        <p>To sign up for an account <a href="#" class="linkBtn"><span>Click Here</span></a></p>

        </div>



    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>






