
<form action="<?php echo $_SERVER['PHP_SELF']   ;?>" method="post">
<fieldset>
<label>First Name</label> 
<input type="text" name="firstName">
<span class="err"><?php echo $firstNameErr ;?></span>
<label>Last Name</label>
<input type="text" name="lastName">
 <span class="err"><?php echo $lastNameErr ;?></span>   
<label>Email</label>
<input type="email" name="email">
<span class="err"><?php echo $emailErr ;?></span>  
<label>Phone</label>
<input type="text" name="phone" placeholder="xxx-xxx-xxxx"> 
<span class="err"><?php echo $phoneErr ;?></span>   
<label>Gender</label>
   <ul>
<li><input type="radio" name="gender" value="female">Female</li> 
<li><input type="radio" name="gender" value="male">Male</li>
<li><input type="radio" name="gender" value="other">Other</li>
    </ul>
<span class="err"><?php echo $genderErr ;?></span>   
<label>Local Foods</label>  
 <ul>
<li><input type="checkbox" name="foods[]" value="ric">Rice</li>
<li><input type="checkbox" name="foods[]" value="past">Pasta</li>
<li><input type="checkbox" name="foods[]" value="bea">Beans</li>
<li><input type="checkbox" name="foods[]" value="sor">Sorghum</li>
<li><input type="checkbox" name="foods[]" value="taq">Taquito</li>
</ul>
<span class="err"><?php echo $foodsErr ;?></span>

<label>Country</label>
<select name="country">
<option value="NULL">Select One</option>
<option value="us">United America</option>
<option value="can">Canada</option>
<option value="uk">United Kingdom</option>
<option value="som">Somalia</option>
<option value="ken">Kenya</option>
<option value="Ethio">Ethiopia</option>
<option value="sa">South Afrca</option>
<option value="uae">United Arab Emirates</option>
</select>  
<span class="err"><?php echo $countryErr ;?></span>   
<label>Comments</label>
<textarea name="comments"></textarea>
<span class="err"><?php echo $commentsErr ;?></span>  
<label>Agree</label>
 <ul>
<li><input type="radio" name="agree" value="agree">Agree</li>  
    </ul>
<span class="err"><?php echo $agreeErr ;?></span>
<input type="submit" value="Send it!">
    
<p><a href="">Reset</a></p>
    
</fieldset>   
</form></body>

