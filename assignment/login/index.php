<?php // index.php this is our wonderful home page, that can only be reached if you login and successfully!!!

session_start();
include('config.php');

if(isset($_SESSION['UserName'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
   session_destroy();
    unset($_SESSION['UserName']);
   header('Location:login.php');
}

// include('includes/header.php');
?>

<?php
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

if(isset($_SESSION['userName'])) :?>
<div class="welcome-logout">
 <h3>
<?php echo $_SESSION['UserName'] ; ?>    
    </h3>   
<a href="index.php?logout='1'">Log out!</a>      
</div>
<?php endif; ?>
    
<h1>Welcome to Our home Page!</h1>

