<?php include 'config.php'; ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title; ?>My Website</title>
<link href="css/styles.css" type="text/css" rel="stylesheet">

</head>

<body class="<?php echo ''.$body.''; echo $background2; ?>">
    
    <header>
    <div class="inner-header">
    <a href="index.php"><img id="logo" src="images/logo.jpg" alt="logo"></a>
 <nav>
 
 <ul>
 <?php
echo makeLinks($nav); 
     
 ?>                           
 </ul>
</nav>
        
        </div>
    </header>