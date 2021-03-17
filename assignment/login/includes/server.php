<?php // server page, which will be communication with our database!!! will be pointing to the config file
// session_start()
// mysqli_real_escape_string --- Fadumo
// mds();



 session_start();
//include('../config.php');
// initialize the variable

$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = array();
$success = 'Your are now Logged in';

// connect to the database!!!

$db = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// register the user
    
if(isset($_POST['reg_user'])) {
  // receive the information 
$FirstName = mysqli_real_escape_string($db, $_POST['FirstName']); 
$LastName = mysqli_real_escape_string($db, $_POST['LastName']);
$Email = mysqli_real_escape_string($db, $_POST['Email']);
$UserName = mysqli_real_escape_string($db, $_POST['UserName']);
$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);
    
// array_push()
    
if(empty($FirstName)) {
   array_push($errors, 'First Name is required'); 
}

if(empty($LastName)) {
   array_push($errors, 'Last Name is required'); 
}
    
if(empty($UserName)) {
   array_push($errors, 'User Name is required'); 
}
    
if(empty($Email)) {
   array_push($errors, 'Email is required'); 
}
    
if(empty($Password_1)) {
   array_push($errors, 'Password is required'); 
}
    
if($Password_1 != $Password_2) {
 array_push($errors, 'Passwords do not match!');    
}
    
// start here to check username and email!
    
$user_check_query = "SELECT * FROM Users WHERE UserName = '$UserName' OR Email = '$Email' LIMIT 1 ";

$result = mysqli_query($db, $user_check_query) or  die(myError(__FILE__,__LINE__,mysqli_error($db)));
    
$user = mysqli_fetch_assoc($result);
    
if($user) {
    
if($user['UserName'] == $UserName) {
   array_push($errors, 'Username already exists'); 
} 
    
if($user['Email'] == $Email) {
   array_push($errors, 'Email already exists'); 
}
    
    
} // ending my big if statement
    
// if everything is okay and there are no errors, we need to now insert the date into the database
   
if(count($errors) == 0) {
$Password = md5($Password_1); 

    
$query = "INSERT INTO Users(FirstName, LastName, UserName, Email, Password) VALUES ('$FirstName', '$LastName', '$UserName', '$Email', '$Password')";
    
mysqli_query($db,$query); 
    
$_SESSION['UserName'] = $UserName;
$_SESSION['success'] = $success;
    
header('Location:login.php');  
    
} // end count
    
}  // closing isset  
    
if(isset($_POST['login_user'])) {
  // receive the information 
    $UserName = mysqli_real_escape_string($db, $_POST['UserName']); 
    
    $Password = mysqli_real_escape_string($db, $_POST['Password']);

if(empty($UserName)) {
   array_push($errors, 'User Name is required'); 
}
    
if(empty($Password)) {
   array_push($errors, 'Password is required'); 
}
    
if(count($errors) == 0) {
$Password = md5($Password);
    
$query = "SELECT * FROM Users WHERE UserName = '$UserName' AND Password = '$Password' ";
    
$results = mysqli_query($db, $query);
    
if(mysqli_num_rows($results) == 1) {
    
  $_SESSION['UserName'] = $UserName;
  $_SESSION['success'] = $success;
    
 header("Location: index.php", false);
} else {
  array_push($errors, '<p class="red">Wrong username/password combo!</p>');     
}  // else
    
} // close count
    
} //close isset