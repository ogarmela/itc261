<?php
include('includes/header.php');

?>
<div id="wrapper">
<h1>This is the content for my page</h1>
      
 <main>
<h2>Welcome to my contact page</h2>
 <?php include('includes/form.php'); ?>       
</main>
        
<aside>
<h3>This my third line in my aside</h3>
    
    
<?php
    
$photos[0] = 'photo11'; 
$photos[1] = 'photo12';
$photos[3] = 'photo13';
$photos[4] = 'photo14';
$photos[5] = 'photo15';            
 
$i = rand(1, 4);
$selectedImage = 'images/'.$photos[$i].'.jpg' ;
echo '<img src="'.$selectedImage.'" alt ="'.$photos[$i].'">' ;

?>
        
</aside>
        
 <?php 
include('includes/footer.php'); ?>

