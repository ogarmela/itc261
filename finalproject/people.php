<?php // people.php page


include('config.php');
 include('includes/header.php');

// we need to connect to the database!!!

$sql = 'SELECT * FROM Finals';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result =mysqli_query($iConn, $sql) or  die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) >0 ) {

    
 while($row=mysqli_fetch_assoc($result)) { 
     
// this array is going to display the contents of your
echo '<ul>';
echo '<li>For more information about <a href="people-view.php?id='.$row['finalsId'].' ">'.$row['city'].'</a></li>';  
echo '<li><b>City:</b> '.$row['city'].'</li>' ;
echo '<li><b>State:</b> '.$row['state'].'</li>' ;
echo '<li><b>Address:</b> '.$row['address'].'</li>' ;
echo '<li><b>Rating:</b> '.$row['rating'].'</li>' ;
echo '<li><b>Cost:</b> '.$row['cost'].'</li>' ;     
//echo '<li><b>Description:</b> '.$row['description'].'</li>' ;
     
echo '</ul>';
     
 }  // close while loop
    
           
}  else {  // close if mysqli num rows
    
 echo 'Nobody home' ;     
}
// releasing the web server
mysqli_free_result($result);

// close the connection

mysqli_close($iConn);


include('includes/footer.php');

