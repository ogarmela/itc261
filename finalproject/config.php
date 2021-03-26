<?php 
// my config file for the Registration folder
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); 
// we want to see our errors

ini_set('display_errors',1);
error_reporting(E_ALL);

include('credentials.php');



define('THIS_PAGE', basename($_SERVER['PHP_SELF']));


switch(THIS_PAGE) {
case 'login.php' :
$body = 'login';
$tittle = 'Our worst Roads Login page!';
break;
        
case 'register.php' :
$body = 'register';
$tittle = 'Register for our roads!';
break;
        
 case 'index.php' :
$body = 'home';
$tittle = 'Home page for our worst Roads!';
break;
        
 case 'about.php' :
$body = 'about';
$tittle = 'About page for our worst Roads';
break;
        
 case 'daily.php' :
$body = 'daily';
$tittle = 'Daily page for our worst Roads';
break;
        
case 'roads.php' :
$body = 'roads';
$tittle = 'Roads page for our Worst Roads';
break;
       
case 'roads-view.php' :
$body = 'roads';
$tittle = 'State Page for our worst Roads';
break;
    
case 'contact.php' :
$body = 'contact';
$tittle = 'Contact page for our worst Roads';
break;
        
}

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'Roads';
$nav['contact.php']= 'Contact';
        
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


// form php

$firstName='';
$lastName='';
$phone='';
$email='';
$gender='';
$cities='';
$region='';
$comments='';
$agree='';

$firstNameErr='';
$lastNameErr='';
$phoneErr='';
$emailErr='';
$genderErr='';
$citiesErr='';
$regionErr='';
$commentsErr='';
$agreeErr='';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    
// if something was empty, echo the error
// if a field is empty we are going to create an error variable

if(empty($_POST['firstName'])) {
$firstNameErr = 'Please enter your first name';    
} else {
 $firstName = $_POST['firstName'];   
} 
    
if(empty($_POST['lastName'])) {
$lastNameErr = 'Please enter your last name';    
} else {
 $lastName = $_POST['lastName'];   
} 
       
if(empty($_POST['phone'])) {  // if empty, type in your number
$phoneErr = 'Please enter Your phone number !';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phoneErr = 'Invalid format!';
} else{
$phone = $_POST['phone'];
}
}
    
if(empty($_POST['email'])) {
$emailErr = 'Please enter your email';    
} else {
 $email = $_POST['email'];   
}
    
if(empty($_POST['gender'])) {
$genderErr = 'Please check one';    
} else {
 $gender = $_POST['gender'];   
} 
    
if(empty($_POST['cities'])) {
$citiesErr = 'what, no cities!!!!!!';    
} else {
 $cities = $_POST['cities'];   
} 

if($_POST['region'] == 'NULL') {
$regionErr = 'Please select your region';    
} else {
 $region = $_POST['region'];   
} 
    
if(empty($_POST['comments'])) {
$commentsErr = 'How can we help you';    
} else {
 $comments = $_POST['comments'];   
} 

if(empty($_POST['agree'])) {
$agreeErr = 'You must agree';    
} else {
 $agree = $_POST['agree'];   
} 

function myCities() {
    $myReturn = '';
 // if my cities array is not empty, implode it
    
if(empty($_POST['cities'])) {
    $myReturn = implode(',',$_POST['myCities']) ;
} return $myReturn;
    
}  // close function
    
    function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
    
if(isset($_POST['firstName'],
        $_POST['lastName'],
         $_POST['phone'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['cities'],
        $_POST['region'],
        $_POST['comments'],
        $_POST['agree'])) {
    
$region = $_POST['region'] ;
    
$headers = array(
'From' => 'donotreply@omar12.com',
'Reply-to' => ' '.$email.''
);
    
$to = 'szemeo@mystudentswa.com';
$subject = 'Your cities email, ' .date('h:i A');
$body = 'Hello  '.$firstName. ''.$lastName.''.PHP_EOL.'
 email is: '.$email.''.PHP_EOL.'
phone Number: '.$phone.''.PHP_EOL.'
Your gender is: '.$gender.''.PHP_EOL.'
Your comments: '.$comments.''.PHP_EOL.'
favorite Region: '.$region.'
your local cities: '.implode(', ', $cities);
    
if($_POST['firstName'] !== '' &&
    $_POST['lastName'] !== '' &&
    $_POST['email'] !== '' &&
    $_POST['cities'] !== '' &&
    $_POST['agree'] !==  ''&&
    $_POST['phone'] !== '' &&
   preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) &&
    $_POST['region'] !== 'NULL') {
    
    mail($to, $subject, $body, $headers);
    header('location:thx.php');
       
} 
        
} // closing isset
    

} // end server request


$todayDate = date('H:i A');

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

// echo '<br>';
switch($today) {
case 'Thursday':
$coffee = 'This is my sad day';
$pic = 'sad.jpg';
$salt = "sad day";
$content = '"The accompanying short film was co-conceived by the pair and directed by Murai. It’s the first music video the filmmaker has been involved with since his Grammy Award-winning clip for Glover’s video for the Childish Gambino hit This Is America back in 2018."New York Times';
$background = 'yellow';
break;
        
case 'Friday':
$coffee = 'Friday is my Holiday and my weekend';
$pic = 'masjid.jpg';
$salt = "Masjid";
$content = '“Friday is the day of the week between Thursday and Saturday. In countries adopting the Monday-first convention it is the fifth day of the week. In countries that adopt the Sunday-first convention, it is the sixth day of the week. In most Western countries, Friday is the fifth and final day of the working week..” —Catherine Pulsifer</b>';
 $background = 'apricot';
break;
          
case 'Saturday':
$coffee = 'Saturday is big day';
$pic = 'sat.jpg';
$salt = "sat";
$content = '<b>Saturday is the day of the week between Friday and Sunday. The Romans named Saturday Sāturni diēs no later than the 2nd century for the planet Saturn, which controlled the first hour of that day, according to Vettius Valens.
</b>';
$background = 'orange';
break;
        
    case 'Sunday':
$coffee = 'Sunday is my chiily day';
$pic = 'sun.jpg';
$salt = "sun";
$content = '“Sunday is the day of the week between Saturday and Monday. Sunday is a day of rest in most Western countries, and a part of the weekend. In some Eastern countries such as Israel Sunday is a weekday.
”';
$background = 'brown';
break;
 case 'Monday':
$coffee = 'Monday is angry and stressed';
$pic = 'mon.jpg';
$salt = "mon";
$content = '<b>When you start to do the things that you truly love, it wouldn’t matter whether it is Monday or Friday; you would be so excited to wake up each morning to work on your passions. If you start the week with a positive attitude, it’ll be a lot easier to fight off negativity for the rest of the week. Sunday and Monday kickstart the week </b>';
$background = 'red';
break;
        
case 'Tuesday':
$coffee = 'Tuesday with out depression day';
$pic = 'terr.jpg';
$salt = "terr";
$content = '<b>“Tuesday morning is a time to reflect upon what to include in your team meetings; it is your time to deliver words of passion that speak to the dazzling new roads ahead where each person is accountable for their own actions and behaviors; where each day represents a fresh start to be a positive influence; and, where self is expressed as unselfishness with each person you meet.</b>” – Byron Pulsifer
';
$background = 'purple';
break;
        
    case 'Wednesday':
$coffee = 'Wednesday is my Happiest';
$pic = 'wed.jpg';
$salt = "wed";
$content = 'The secret of getting ahead is getting started. – Mark Twain
Time seems to slow down around the middle the week when the workload is heavier and the weekend is still too far. The only way to move ahead though is to focus all our attention on doing our best work.  Time flies faster when we work and gives us the satisfaction of productivity.';
$background = 'purple';
break;
             
}



