<?php // people.php page


include('config.php');
// include('includes/header.php');

// we need to connect to the database!!!

$sql = 'SELECT * FROM NAmedatabase';

$iconn = mysqli_connect(DB_USER, DB_DB_HOST, DB_PASSWORD) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result =mysqli_query($iconn, $sql) or or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) >0 ) {

 while($row=mysql_fetch_assoc($result)) {
// this array is going to display the contents of your
echo '<ul>';
echo '<li>For more information about <a href="people-view.php?id='$row['week8Peopleid'].' ">'.$row['firstName'].'</a></li>';  
echo '<li><b>First Name:</b> '.$row['firstName'].'</li>' ;
echo '<li><b>Lat Name:</b> '.$row['lastName'].'</li>' ;
echo '<li><b>Occupation:</b> '.$row['occupation'].'</li>' ;
     
     
echo '</ul>';
     
 }  // close while loop
    
           
}  else {  // close if mysqli num rows
    
 echo 'Nobody home' ;     
}
// releasing the web server
mysqli_free_result($result);

// close the connection

mysqli_close($icon);
