
<?php
ini_set('display_errors', 1);
error_reporting(-1);
?>

<?php // log in page will be pointing to the server.php page - username and password

include('includes/header.php');

?>

<h1>Login</h1>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<label>Username</label>    
<input type="text" name="UserName" value="<?php if(isset($_POST['UserName'])) echo $_POST['UserName'] ;?>">
<label>Your Password</label>
 <input type="password" name="Password">
    <?php
    include('includes/errors.php');
    ?>
   
<button type="submit" class="btn" name="login_user">Login</button>
    
<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Reset</button>
    
</fieldset>
    
    
</form>
<P class="center">Haven't Registered? <a href="register.php">Register Here!</a></P>

</div>    <!--end wrapper-->
<?php
include('includes/footer.php');
