<?php

include 'includes/header.php';

?>
    <div id="wrapper">
    <h1>This is the content for my page</h1>
        <div id="hero">
<?php
$photos[0] = 'photo6'; 
$photos[1] = 'photo7';
$photos[3] = 'photo8';
$photos[4] = 'photo9';
$photos[5] = 'photo10';            
 
$i = rand(1, 4);
$selectedImage = 'images/'.$photos[$i].'.jpg';
echo '<img src="'.$selectedImage.'" alt ="'.$photos[$i].'">';

?>
        
</div>   <!-- end hero-->
        
        <main>
        <h2>Thank YOU PAGE</h2>
        <p><form action="Thank_You.php" method="post" >
        Name:<br /><input type="text" name="name" required="required" /><br /><br />
        E-mail:<br /><input type="text" name="email" required="required" /><br /><br />
        Message:<br /><textarea name="message" required="required"></textarea><br /><br />
        <input type="submit" value="Submit">
</form>

        </main>
        
        <aside>
        <h3>This my third line in my aside</h3>
        
        </aside>
        
        
        <?php 
            include('includes/footer.php'); ?>

