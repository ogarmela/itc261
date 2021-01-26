<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']))
    
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Website folder home page</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body class="<?php   ?>">
    
    <header>
    <div class="inner-header">
    <a href="index.html"><img id="logo"src="images/logo.jpg" alt="logo"></a>
        <nav>
<!--                
        <ul>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li> 
        <li><a href="">Daily</a></li> 
        <li><a href="">People</a></li> 
        <li><a href="">Contact</a></li>
        <li><a href="">Gallery</a></li> 
            </ul>
-->   
            <ul>
            
            <?php  
                // if we are on this page, that woul be our active. if we are not on this page, it is not active.
           foreach($nav as $key => $value) {
               if(THIS_PAGE == $key) { 
            echo '<li><a class="active" href="'.$key.'"> '.$value.'</a></li>';
                   } else {
            echo '<li><a href="'.$key.'"> '.$value.'</a></li>';
                   
               } // end else
               
                }  // end foreach
    
                ?>
                 
            </ul>
        </nav>
        
        </div>
    </header>
    <div id="wrapper">
    <h1>This is the content for my page</h1>
        <div id="hero">
            
        
        </div>   <!-- end hero-->
        
        <main>
        <h2>This my second line my main</h2>
        
        </main>
        
        <aside>
        <h3>This my third line in my aside</h3>
        
        </aside>
        
        
        <?php 
            include('includes/footer.php'); ?>

