<form action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>First Name</label> 
<input type="text" name= "firstName" value="<?php if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']) ;?>">
 <span class="err"><?php echo $firstNameErr ;?></span> 
    
  <label>Last Name</label> 
 <input type="text" name="lastName" value="<?php if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']) ;?>">
  <span class="err"><?php echo $lastNameErr ;?></span>
  
<label>Phone</label>
<input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>"> 
<span class="err"><?php echo $phoneErr ;?></span> 
    
 <label>Email</label>
 <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
 <span class="err"><?php echo $emailErr ;?></span>
  
    <label>Gender</label>
    <ul>
<li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"' ;?>>Female</li>
<li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"' ;?>>Male</li>
<li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"' ;?>>Other</li> 
    </ul>
  <span class="err"><?php echo $genderErr ;?></span>  
 <label>Favorite cities</label>
    <ul>
<li><input type="checkbox" name="cities[]" value="seattle" <?php if(isset($_POST['cities']) && in_array('seattle', $cities))  echo 'checked="checked"' ;?>>Seattle</li>
<li><input type="checkbox" name="cities[]" value="tocoma" <?php if(isset($_POST['cities']) && in_array('tocoma', $cities))  echo 'checked="checked"' ;?>>Tocoma</li>
<li><input type="checkbox" name="cities[]" value="bellevue" <?php if(isset($_POST['cities']) && in_array('bellevue', $cities))  echo 'checked="checked"' ;?>>bellevue</li>
<li><input type="checkbox" name="cities[]" value="kirland" <?php if(isset($_POST['cities']) && in_array('kirland', $cities))  echo 'checked="checked"' ;?>>Kirland</li>
<li><input type="checkbox" name="cities[]" value="colorado" <?php if(isset($_POST['cities']) && in_array('colorado', $cities))  echo 'checked="checked"' ;?>>Colorada</li>
    </ul>
 <span class="err"><?php echo $citiesErr ;?></span>  
<label>Regions</label> 
<select name="region">
<option value="Null" <?php if(isset($_POST['region']) && $_POST['region'] == 'NULL') echo 'selected="unselected"' ;?>>Select One</option> 
<option value="nw" <?php if(isset($_POST['region']) && $_POST['region'] == 'nw') echo 'selected="unselected"' ;?>>Northwest</option>
<option value="sw" <?php if(isset($_POST['region']) && $_POST['region'] == 'sw') echo 'selected="unselected"' ;?>>Southwest</option>
<option value="mw" <?php if(isset($_POST['region']) && $_POST['region'] == 'mw') echo 'selected="unselected"' ;?>>Midwest</option>
<option value="ne" <?php if(isset($_POST['region']) && $_POST['region'] == 'ne') echo 'selected="unselected"' ;?>>Northeast</option>
<option value="south" <?php if(isset($_POST['region']) && $_POST['region'] == 's') echo 'selected="unselected"' ;?>>South</option>
</select>
 <span class="err"><?php echo $regionErr ;?></span> 
 <label>comments</label>  
 <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>   
 <span class="err"><?php echo $commentsErr ;?></span>   
<label>Agree</label>
    <ul>
<li><input type="radio" name="agree" value="agree">Agree</li>  
   </ul>
<span class="err"><?php echo $agreeErr ;?></span>    
<input type="submit" value="send it!">

<p><a href="">Reset</a></p>
</fieldset>
    
</form>
