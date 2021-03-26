<?php // people-view.php

include('config.php');
include('includes/header.php');
if(isset($_GET['id'])) {
 $id = (int)$_GET['id'] ; 
} else {
    header('Location:people.php');
}

$sql = 'SELECT * FROM Finals WHERE FinalsId = '.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or 
die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result =mysqli_query($iConn, $sql) or  die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) >0 ) {
    
 while($row=mysqli_fetch_assoc($result)) {
$city = stripslashes($row['city']);
$state = stripslashes($row['state']);
$address = stripslashes($row['address']);
$rating = stripslashes($row['rating']);
$cost = stripslashes($row['cost']);
$description = stripslashes($row['description']);
$feedback = '';
 }  // closing while
    
    
} else {
$feedback = 'Nobody is home - I am busy today; I am working my Final Projects!!!' ;    
    
}  // close else

//include('includes/header.php');

?>

<main>
<h1>Yes!!! we have in Trouble this Final Project</h1>
<h2>How are on <?php echo $city;?>'s page</h2>
<?php
if($feedback == '') {
  echo '<ul>';  
 echo '<li><b>City:</b> '.$city.'</li>'; 
 echo '<li><b>State:</b> '.$state.'</li>';
 echo '<li><b>Address:</b> '.$address.'</li>';
 echo '<li><b>Rating:</b>  '.$rating.'</li>';
echo '<li><b>Cost:</b>  '.$cost.'</li>';
  echo '</ul>';
 echo '<p>'.$description.'</p>';  
echo '<p><a href="people.php">Return to our type Page</a></p>'; 
} else {
    echo $feedback;
}
    ?>
    </main>
    
     <aside>
         <?php
    if($feedback == '') {
  echo '<img src="images/people'.$id.'.jpg" alt="'.$city.'">';
         }
         
         ?>
    </aside>
<?php
// releasing the web server
mysqli_free_result($result);

// close the connection

mysqli_close($iConn);

?>

<!-- don't forget you are in html land!-->
</div> <!--end wrapper-->

<?php
include('includes/footer.php');
