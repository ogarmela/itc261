<?php // server page, which will be communication with our database!!! will be pointing to the config file
// session_start()
// mysqli_real_escape_string --- O'Brien
// mds();

session_start();

// initialize the variable

$FirstName = '';
$LastName = '';
$Email = '';
$UserName = '';
$errors = array();
$success = '';

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

if(empty($LasttName)) {
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
    
    
    
    
}  // closing isset  
    