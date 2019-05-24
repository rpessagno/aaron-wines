<div id="v65-modalContainer">
  <div id="v65-modalViel">&nbsp;</div>
  <div id="v65-modalContentWrapper">
    <div id="v65-modalContentHeader"><a href="javascript:vin65.modal.closeWindow()" class="modalLinkBtn"><span>Close</span></a></div>
    <div id="v65-modalContent">
      <ul>
        <li class="error">Invalid Username or Password.</li>
      </ul>
      <form method="post" name="login" class="v65-form" id="v65-loginForm" action="/index.cfm?method=memberlogin.processModalLogin">
        <input type="hidden" name="referrerQueryString" value="method=checkout.billing">
        <fieldset>
          <legend>Login</legend>
          <div>
            <label for="username">Username or Email</label>
            <input type="text" name="username" value="" style="width: 150px;">
          </div>
          <div>
            <label for="password">Password</label>
            <input type="Password" name="password" value="" style="width: 150px;">
          </div>
          <div class="v65-group">
            <input type="checkbox" name="rememberMe" value="1" id="rememberme">
            <label for="rememberme">
            Remember Me 
            </label>
          </div>
          <div>
            <button type="submit" value="submit" class="defaultBtn"><span>Login</span></button>
          </div>
        </fieldset>
      </form>
      <p>&nbsp;</p>
      <p>Forgot your username or password? <a href="/index.cfm?method=memberlogin.showForgot" id="v65-modalForgotPasswordLink">Click Here</a></p>
      <p>To sign up for an account <a href="/index.cfm?method=memberCreateAccount.signup">Click Here</a></p>
      <p><a href="javascript:vin65.modal.closeWindow()">Close Window</a></p>
    </div>
  </div>
</div>