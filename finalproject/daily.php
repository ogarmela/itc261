<?php // index.php this is our wonderful home page, that can only be reached if you login and successfully!!!
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start();
include('config.php');

if(!isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
   session_destroy();
    unset($_SESSION['UserName']);
   header('Location:login.php');
}

 include('includes/header.php'); 
    

//Notification message
if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
<?php echo $_SESSION['success']  ;
    unset($_SESSION['success']) ;
    ?>     
    </h3>
    </div>
    <?php endif;

if(isset($_SESSION['UserName'])) :?>
<div class="welcome-logout">
 <h4> Hello,
<?php echo $_SESSION['UserName'] ; ?> 
    </h4>   
<a href="index.php?logout='1'">Log out!</a>      
</div>


<h1>Welcome to Our daily Page!</h1>

<main>

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
</main>
<?php endif; ?>

<?php
include('includes/footer.php');
?>