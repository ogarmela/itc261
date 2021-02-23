<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?>My Website</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body class="<?php echo $body; ?>">
    
    <header>
    <div class="inner-header">
    <a href="index.html"><img id="logo" src="images/logo.jpg" alt="logo"></a>
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
