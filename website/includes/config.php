<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
date_default_timezone_set('America/Los_Angeles');

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

function makeLinks($nav) {
    $myReturn = '';
    foreach($nav as $key => $value) {
         if(THIS_PAGE == $key) {
            $myReturn .= '<li><a class="active" href="'.$key.'">'.$value.'</a></li>' ;

         } else {
             $myReturn .= '<li><a href="'.$key.'">'.$value.'</a></li>';
         }  // end else

    } // end foreach

     return $myReturn;
    
} // close function

// create my random function here!!



switch(THIS_PAGE) {
 case 'index.php' :
$tittle = 'Home page of our website Project';
$body = 'home';
    break;
        
 case 'about.php' :
$tittle = 'About page of our website Project';
$body = 'about';
    break;
        
 case 'people.php' :
$tittle = 'People page of our website Project';
$body = 'people';
    break;
        
 case 'daily.php' :
$tittle = 'Daily page of our website Project';
$body = 'daily';
    break;
        
 case 'contact.php' :
$tittle = 'Contact page of our website Project';
$body = 'contact';
    break;
        
 case 'gallery.php' :
$tittle = 'Gallery page of our website Project';
$body = 'gallery';
    break;
        
        defualt:

$body = 'inner';
$title='Our wonderful website';
        
}

// form php

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
  your local foods: '.implode(', ', $foods).'
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


