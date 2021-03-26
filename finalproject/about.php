<?php // index.php this is our wonderful home page, that can only be reached if you login and successfully!!!

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

 include('includes/header.php'); ?>
<main>
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

if(isset($_SESSION['UserName'])) :?>
<div class="welcome-logout">
 <h3> Hello,
<?php echo $_SESSION['UserName'] ; ?> 
    </h3>   
<a href="index.php?logout='1'">Log out!</a>      
</div>
<?php endif; ?>  

<h1>Welcome to Our about Page!</h1>
    <h2>My Road users table</h2>
<div class="img">
<img src="images/users.jpg" alt="<?php echo $users; ?>">
                                                                           
</div>
    
<h3>My Road final table</h3>
<div class="img">                                                                     
<img src="images/finals.jpg" alt="<?php echo $finals; ?>">  
</div>
</main>
<aside>
<h4>This is my aside</h4>
</aside>
</div>  <!---end wrapper-->

<?php
include('includes/footer.php');
