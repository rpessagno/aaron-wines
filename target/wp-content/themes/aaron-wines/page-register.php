<?php

/*
Template Name: Register
*/

get_header();

?>




<div data-vsPlugin="registration" class="vinespring"></div>

  <script type="text/html" id="vs2-registration-form-custom">

    <div class="login-form">

      <h2>Register</h2>

      <p>All fields are required</p>
        
      <div class="vs-form-row">
        <label><span>First Name</span></label>
        <input type="text" name="FirstName" maxlength="100" required>        
      </div>

      <div class="vs-form-row">
        <label><span>Last Name</span></label>
        <input type="text" name="LastName" maxlength="100" required>        
      </div>

      <div class="vs-form-row">
        <label><span>Email</span></label>
        <input type="email" name="Email" maxlength="400" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="email@domain.com">   
      </div>

      <div class="vs-form-row">
        <label><span>Phone Number</span></label>
        <input type="tel" name="Phone" maxlength="100" required>        
      </div>

      <p data-bind="visible: error() == 'accountExists'">
      An account with this email address already exists. Would you like to <a href="/account#login">login, or recover your password?</a>
      </p>

      <p data-bind="visible: !error()">
      <button type="submit" data-bind="disable: busy, text: busy() ? 'Please wait...' : 'Register'"></button>
      </p>

    </div>

  </script>

</div>


<?php get_footer(); ?>