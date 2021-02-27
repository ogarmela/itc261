<?php
include('includes/header.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Switch!!!

//echo date('Y');
//echo '<br>';
//echo date('l');
 // if today is Thursday, show me Thursday's content

// Global variables, Capitalized, and the global variables  have many attributes 
// $_POST
//$_GET
// IS TODAY SET???
//isset is a function -- isset()

date_default_timezone_set('America/New_York');

$todayDate = date('H:i A');

if(isset($_GET['today'])) {
    $today = $_GET['today'] ;
} else {
    $today = date('l');
}

// echo '<br>';
switch($today) {
    case 'Thursday':
    $coffee = 'Thursday is my happy day';
        $pic = 'Thursday.jpg';
        $salt = "Thursday";
        $content = '"I learned that courage <b>was not the absence of fear, but the triumph over it. The brave man is not he who does not feel afraid, but he who </b>conquers that fear." – Nelson Mandela';
        $background = 'red';
        break;
        
        case 'Friday':
    $coffee = 'Friday is my is the Lasday of weekdays';
        $pic = 'masjid.jpg';
        $salt = "Masjid";
        $content = '“When you leave work on Friday, leave work. <b>Don’t let technology follow you throughout your weekend (answering text messages and emails) take a break you will be more refreshed to begin the workweek if you have had a break.” —Catherine Pulsifer</b>';
        $background = 'pink';
        break;
          
      case 'Saturday':
      $coffee = 'Saturday is my start of Weekenday';
        $pic = 'relax.jpg';
        $salt = "relax";
        $content = '<b>On a lazy Saturday morning when you’re lying in bed, drifting in and out of sleep, there is a space where fantasy and reality become one.Happy Saturday! When you rise in the morning, give thanks for the light, for your life, for your strength. Give thanks for your food and for the joy of living. If you see no reason to give thanks, the fault lies in yourself. Tecumseh</b>';
        $background = 'lightblue';
        break;
        
        case 'Sunday':
    $coffee = 'Sunday is my chiily day';
        $pic = 'chilly.jpg';
        $salt = "chilly";
        $content = '“Although time seems to fly, it never travels faster than one day at a time. Each day is a new opportunity to live your life to the fullest. In each waking day, you will find scores of blessing and opportunities for positive change. Do not let your today be stolen by the unchangeable past or the indefinite future! Today is a new day! Good Morning.”';
        $background = 'green';
        break;
        case 'Monday':
    $coffee = 'Monday is angry and stressed';
        $pic = 'depression.jpg';
        $salt = "depression";
        $content = 'Every day we have plenty of opportunities to get angry, stressed or offended. But what you’re doing when you indulge these negative emotions is giving something outside yourself power over your happiness. <b>You can choose to not let little things upset you.The two most powerful warriors are patience and time.” …so remember: great achievements take time, there is no overnight success</b>';
        $background = 'aqua';
        break;
        
        case 'Tuesday':
    $coffee = 'Tuesday with out depression day';
        $pic = 'goat.jpg';
        $salt = "goat";
        $content = '<b>Tuesday is the day I actually start the week, Monday I just deal with the depression of the weekend ending</b>Tuesday morning is a time to reflect upon what to include in your team meetings; it is your time to deliver words of passion that speak to the dazzling new roads ahead where each person is accountable for their own actions and behaviors; where each day represents a fresh start to be a positive influence; and, where self is expressed as unselfishness with each person you meet.Three positive facts are obvious on Tuesday: Tomorrow allows me another day to demonstrate my worthiness to my employer; it is yet another day to influence those around me with encouragement to handle their own trials; and, it is my day to celebrate each small victory of yesterday.”';
        $background = 'yellow';
        break;
        
        case 'Wednesday':
    $coffee = 'Wednesday is my Happiest';
        $pic = 'camel.jpg';
        $salt = "camel";
        $content = 'Happy Wednesday! You are who you are; be happy with what you are called to do. Do not pretend to be like someone else for your gifts are unique to help lead you to the success as only you can define. Have a good day. Wednesday will be amazing so wake up and smile.';
        $background = 'gray';
        break;
             
}

?>
    <div id="wrapper">
    <h1>Welcome to daily my page</h1>
            
        
        </div>   <!-- end hero-->
<div  class="<?php echo $background; ?>">
    
<h1><?php 
    
if($todayDate <=11) {
    echo 'Good Morning! <br>';
} elseif($todayDate <=15) {
echo 'Good Afternoon <br>';
} else {
 echo 'Good Evening <br>';
}  // ende else
echo $coffee;  
?></h1>
    
<div class="img">
<img src="images/<?php echo $pic; ?>" alt="<?php echo $salt; ?>">
   
    </div>
<p><?php echo $content; ?></p>                                                         
<h2>Check out our daily specials below!</h2>
<ul>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>
<li><a href="daily.php?today=Sunday">Sunday</a></li> 
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
    
</ul>
<p><a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fomar12.com%2Fit261%2Fassigment%2Fswitch%2FSwitch.php">HTML valid</a></p>
<p><a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fomar12.com%2Fit261%2Fassigment%2Fswitch%2FSwitch.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=en">CSS valid</a></p>


</div>



        
        <?php 
            include('includes/footer.php'); ?>

