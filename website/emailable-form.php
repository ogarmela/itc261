<?php

$firstName='';
$lastName='';
$email='';
$phone='';
$gender='';
$foods='';
$country='';
$comments='';
$agree='';

$firstNameErr='';
$lastNameErr='';
$emailErr='';
$phoneErr='';
$genderErr='';
$foodsErr='';
$countryErr='';
$commentsErr='';
$agreeErr='';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
if(empty($_POST['firstName'])) {
 $firstNameErr = 'Please enter Your first Name';   
} else {
   $firstName = $_POST['firstName']; 
} 

if(empty($_POST['lastName'])) {
 $lastNameErr = 'Please enter Your last Name';   
} else {
   $lastName = $_POST['lastName']; 
} 

if(empty($_POST['email'])) {
 $emailErr = 'Please enter Your email';   
} else {
   $email = $_POST['email']; 
} 
    
if(empty($_POST['phone'])) {  // if empty, type in your number
    $phoneErr = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
    
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone = 'Invalid format!';
    } else {
        $phone = $_POST['phone'];
    }
    
}

    
if(empty($_POST['gender'])) {
 $genderErr = 'Please check one';   
} else {
   $gender = $_POST['gender']; 
} 
if(empty($_POST['foods'])) {
 $foodsErr = 'what, no foods..??';   
} else {
   $foods = $_POST['foods']; 
} 
    
if($_POST['country'] == 'NULL') {
 $countryErr = 'Please select your country';   
} else {
   $country = $_POST['country']; 
} 
    
if(empty($_POST['comments'])) {
 $commentsErr = 'How Can i help you?';   
} else {
   $comments = $_POST['comments']; 
} 
    
if(empty($_POST['agree'])) {
 $agreeErr = 'you must agree';   
} else {
   $agree = $_POST['agree']; 
} 
    
if(isset($_POST['firstName'],
        $_POST['lastName'],
        $_POST['email'],
        $_POST['phone'],
        $_POST['gender'],
        $_POST['foods'],
        $_POST['country'],
        $_POST['comments'],
        $_POST['agree'])) {
       
 $to = 'cumarsh206@gmail.com';
 $from = 'From:donotreply@omar12.com';
 $subject = 'Test email for my emailable form, '.date('m/d/y');
$body = 'Hello '.$firstName. ' '.$lastName.''.PHP_EOL.'
 your email is: '.$email.''.PHP_EOL.'
 your gender is: '.$gender.''.PHP_EOL.'
 your phone is: '.$phone.''.PHP_EOL.'
  your local foods is: '.$foods.''.PHP_EOL.'
 your comments: '.$comments.''.PHP_EOL.'
 Favorite Country: '.$country.'';
    
mail($to, $subject, $body, $from);
header('location:thx.php');   
    
}  else {
    echo 'else:';
      echo $_POST['firstName'];
   echo  $_POST['lastName'];
    echo $_POST['email'];
    echo $_POST['phone'];
    echo $_POST['gender'];
    echo $_POST['foods'];
    echo $_POST['country'];
    echo $_POST['comments'];
    echo $_POST['agree'];
}
    
}     // end server

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Emailable form</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
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
</form>
</body>
</html>

