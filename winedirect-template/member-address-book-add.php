<?php include('inc/header.php'); ?>


<div class="winedirect-wrapper">

  <?php include('inc/member-nav.php'); ?>


  <div class="member">
    <!-- Output by WineDirect -->

     <h1>Edit Address Book</h1> 
      <ul>
      
        <li class="error">First Name is mandatory.</li>
      
        <li class="error">Last Name is mandatory.</li>
      
        <li class="error">Address is mandatory.</li>
      
        <li class="error">City is mandatory.</li>
      
        <li class="error">State Code is mandatory.</li>
      
        <li class="error">Zip Code is mandatory.</li>
      
        <li class="error">Phone is mandatory.</li>
      
        <li class="error">Birth Date must be a valid date.</li>
      
        <li class="error">Email Address was not a valid email address.</li>
      
      </ul>

          

    <div id="v65-memberFormWrapper">
    <form method="post" class="v65-form" action="/index.cfm?method=memberAddressBook.editEntrySuccess" name="Edit" enctype="multipart/form-data">
      <fieldset>
        
        <legend>Add/Edit Address Book</legend>
        
        <div>
          <label for="IsPrimary">Primary Shipping Address</label>
          <select name="isPrimary" style="width: 80px;">
            <option value="0">No</option>
            <option value="1">Yes</option>
          </select>
        </div>
      
        <div>
          <label for="Nickname">Nickname</label>
          <input type="text" name="Nickname" value="" style="width: 175px;">
        </div>
        
        
          <div class="error">
          <label for="BirthDate"><span class="red">*</span>Birth Date</label>
          
            <select name="BirthMonth" style="width: 80px;">
              <option value="">Month</option>
              
              <option value="1">Jan</option>
              
              <option value="2">Feb</option>
              
              <option value="3">Mar</option>
              
              <option value="4">Apr</option>
              
              <option value="5">May</option>
              
              <option value="6">Jun</option>
              
              <option value="7">Jul</option>
              
              <option value="8">Aug</option>
              
              <option value="9">Sep</option>
              
              <option value="10">Oct</option>
              
              <option value="11">Nov</option>
              
              <option value="12">Dec</option>
              
            </select>
            <select name="BirthDay" style="width: 60px;">
              <option value="">Day</option>
              
              <option value="1">1</option>
              
              <option value="2">2</option>
              
              <option value="3">3</option>
              
              <option value="4">4</option>
              
              <option value="5">5</option>
              
              <option value="6">6</option>
              
              <option value="7">7</option>
              
              <option value="8">8</option>
              
              <option value="9">9</option>
              
              <option value="10">10</option>
              
              <option value="11">11</option>
              
              <option value="12">12</option>
              
              <option value="13">13</option>
              
              <option value="14">14</option>
              
              <option value="15">15</option>
              
              <option value="16">16</option>
              
              <option value="17">17</option>
              
              <option value="18">18</option>
              
              <option value="19">19</option>
              
              <option value="20">20</option>
              
              <option value="21">21</option>
              
              <option value="22">22</option>
              
              <option value="23">23</option>
              
              <option value="24">24</option>
              
              <option value="25">25</option>
              
              <option value="26">26</option>
              
              <option value="27">27</option>
              
              <option value="28">28</option>
              
              <option value="29">29</option>
              
              <option value="30">30</option>
              
              <option value="31">31</option>
              
            </select>
          
          <select name="BirthYear" style="width: 60px;">
            <option value="">Year</option>
            
            <option value="1900">1900</option>
            
            <option value="1901">1901</option>
            
            <option value="1902">1902</option>
            
            <option value="1903">1903</option>
            
            <option value="1904">1904</option>
            
            <option value="1905">1905</option>
            
            <option value="1906">1906</option>
            
            <option value="1907">1907</option>
            
            <option value="1908">1908</option>
            
            <option value="1909">1909</option>
            
            <option value="1910">1910</option>
            
            <option value="1911">1911</option>
            
            <option value="1912">1912</option>
            
            <option value="1913">1913</option>
            
            <option value="1914">1914</option>
            
            <option value="1915">1915</option>
            
            <option value="1916">1916</option>
            
            <option value="1917">1917</option>
            
            <option value="1918">1918</option>
            
            <option value="1919">1919</option>
            
            <option value="1920">1920</option>
            
            <option value="1921">1921</option>
            
            <option value="1922">1922</option>
            
            <option value="1923">1923</option>
            
            <option value="1924">1924</option>
            
            <option value="1925">1925</option>
            
            <option value="1926">1926</option>
            
            <option value="1927">1927</option>
            
            <option value="1928">1928</option>
            
            <option value="1929">1929</option>
            
            <option value="1930">1930</option>
            
            <option value="1931">1931</option>
            
            <option value="1932">1932</option>
            
            <option value="1933">1933</option>
            
            <option value="1934">1934</option>
            
            <option value="1935">1935</option>
            
            <option value="1936">1936</option>
            
            <option value="1937">1937</option>
            
            <option value="1938">1938</option>
            
            <option value="1939">1939</option>
            
            <option value="1940">1940</option>
            
            <option value="1941">1941</option>
            
            <option value="1942">1942</option>
            
            <option value="1943">1943</option>
            
            <option value="1944">1944</option>
            
            <option value="1945">1945</option>
            
            <option value="1946">1946</option>
            
            <option value="1947">1947</option>
            
            <option value="1948">1948</option>
            
            <option value="1949">1949</option>
            
            <option value="1950">1950</option>
            
            <option value="1951">1951</option>
            
            <option value="1952">1952</option>
            
            <option value="1953">1953</option>
            
            <option value="1954">1954</option>
            
            <option value="1955">1955</option>
            
            <option value="1956">1956</option>
            
            <option value="1957">1957</option>
            
            <option value="1958">1958</option>
            
            <option value="1959">1959</option>
            
            <option value="1960">1960</option>
            
            <option value="1961">1961</option>
            
            <option value="1962">1962</option>
            
            <option value="1963">1963</option>
            
            <option value="1964">1964</option>
            
            <option value="1965">1965</option>
            
            <option value="1966">1966</option>
            
            <option value="1967">1967</option>
            
            <option value="1968">1968</option>
            
            <option value="1969">1969</option>
            
            <option value="1970">1970</option>
            
            <option value="1971">1971</option>
            
            <option value="1972">1972</option>
            
            <option value="1973">1973</option>
            
            <option value="1974">1974</option>
            
            <option value="1975">1975</option>
            
            <option value="1976">1976</option>
            
            <option value="1977">1977</option>
            
            <option value="1978">1978</option>
            
            <option value="1979">1979</option>
            
            <option value="1980">1980</option>
            
            <option value="1981">1981</option>
            
            <option value="1982">1982</option>
            
            <option value="1983">1983</option>
            
            <option value="1984">1984</option>
            
            <option value="1985">1985</option>
            
            <option value="1986">1986</option>
            
            <option value="1987">1987</option>
            
            <option value="1988">1988</option>
            
            <option value="1989">1989</option>
            
            <option value="1990">1990</option>
            
            <option value="1991">1991</option>
            
            <option value="1992">1992</option>
            
            <option value="1993">1993</option>
            
            <option value="1994">1994</option>
            
            <option value="1995">1995</option>
            
            <option value="1996">1996</option>
            
            <option value="1997">1997</option>
            
            <option value="1998">1998</option>
            
            <option value="1999">1999</option>
            
            <option value="2000">2000</option>
            
            <option value="2001">2001</option>
            
            <option value="2002">2002</option>
            
            <option value="2003">2003</option>
            
            <option value="2004">2004</option>
            
            <option value="2005">2005</option>
            
            <option value="2006">2006</option>
            
            <option value="2007">2007</option>
            
            <option value="2008">2008</option>
            
            <option value="2009">2009</option>
            
            <option value="2010">2010</option>
            
            <option value="2011">2011</option>
            
            <option value="2012">2012</option>
            
            <option value="2013">2013</option>
            
            <option value="2014">2014</option>
            
            <option value="2015">2015</option>
            
            <option value="2016">2016</option>
            
            <option value="2017">2017</option>
            
            <option value="2018">2018</option>
            
          </select>                   
          </div>          
        
        
        <div class="error">
          <label for="FirstName"><span class="red">*</span>First Name</label>
          <input type="text" name="FirstName" value="" style="width: 175px;">
        </div>
        
        <div class="error">
          <label for="LastName"><span class="red">*</span>Last Name</label>
          <input type="text" name="LastName" value="" style="width: 175px;">
        </div>    
        
        <div>
          <label for="Company">Company</label>
          <input type="text" name="Company" value="" style="width: 175px;">
        </div>                
        
        <div class="error">
          <label for="Address"><span class="red">*</span>Address</label>
          <input type="text" name="Address" value="" style="width: 250px; margin-bottom: 8px;"><br>
          <input type="text" name="Address2" value="" style="width: 250px;">
        </div>  
        
        <div class="error">
          <label for="City"><span class="red">*</span>City</label>
          <input type="text" name="City" value="" style="width: 175px;">
        </div>  
        
        <div class="error">
          <label for="StateCode"><span class="red">*</span>State</label>
          
            <select name="StateCode" style="width: 180px;">           
              <option value=""></option>
              
                <option value="AL">Alabama</option>
              
                <option value="AK">Alaska</option>
              
                <option value="AZ">Arizona</option>
              
                <option value="AR">Arkansas</option>
              
                <option value="CA">California</option>
              
                <option value="CO">Colorado</option>
              
                <option value="CT">Connecticut</option>
              
                <option value="DE">Delaware</option>
              
                <option value="DC">District of Columbia</option>
              
                <option value="FL">Florida</option>
              
                <option value="GA">Georgia</option>
              
                <option value="HI">Hawaii</option>
              
                <option value="ID">Idaho</option>
              
                <option value="IL">Illinois</option>
              
                <option value="IN">Indiana</option>
              
                <option value="IA">Iowa</option>
              
                <option value="KS">Kansas</option>
              
                <option value="KY">Kentucky</option>
              
                <option value="LA">Louisiana</option>
              
                <option value="ME">Maine</option>
              
                <option value="MD">Maryland</option>
              
                <option value="MA">Massachusetts</option>
              
                <option value="MI">Michigan</option>
              
                <option value="MN">Minnesota</option>
              
                <option value="MS">Mississippi</option>
              
                <option value="MO">Missouri</option>
              
                <option value="MT">Montana</option>
              
                <option value="NE">Nebraska</option>
              
                <option value="NV">Nevada</option>
              
                <option value="NH">New Hampshire</option>
              
                <option value="NJ">New Jersey</option>
              
                <option value="NM">New Mexico</option>
              
                <option value="NY">New York</option>
              
                <option value="NC">North Carolina</option>
              
                <option value="ND">North Dakota</option>
              
                <option value="OH">Ohio</option>
              
                <option value="OK">Oklahoma</option>
              
                <option value="OR">Oregon</option>
              
                <option value="PA">Pennsylvania</option>
              
                <option value="RI">Rhode Island</option>
              
                <option value="SC">South Carolina</option>
              
                <option value="SD">South Dakota</option>
              
                <option value="TN">Tennessee</option>
              
                <option value="TX">Texas</option>
              
                <option value="UT">Utah</option>
              
                <option value="VT">Vermont</option>
              
                <option value="VA">Virginia</option>
              
                <option value="WA">Washington</option>
              
                <option value="WV">West Virginia</option>
              
                <option value="WI">Wisconsin</option>
              
                <option value="WY">Wyoming</option>
              
            </select> 
          
        </div>  
        
        <div class="error">
          <label for="ZipCode"><span class="red">*</span>Zip Code</label>
          <input type="text" name="ZipCode" value="" style="width: 100px;">
        </div>  
        
        <div class="error">
          <label for="MainPhone"><span class="red">*</span>Phone</label>
          <input type="text" name="MainPhone" value="" style="width: 175px;">
        </div>  
        
        <div class="error">
          <label for="Email"><span class="red">*</span>Email</label>
          <input type="text" name="Email" value="" style="width: 175px;">
        </div>  

        

        
        
        <div><button type="submit" value="submit" class="defaultBtn"><span>Submit</span></button></div>
      </fieldset>
    </form>

    </div>

    <!-- / Output by WineDirect -->
  </div>


</div>


<?php include('inc/footer.php'); ?>