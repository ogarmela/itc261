<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));
    
$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['people.php']= 'People';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

switch(THIS_PAGE) {
 case 'index.php' :
$tittle = 'Home page of our website Project';
$body = 'home';
    break;
        
 case 'about.php' :
$tittle = 'About page of our website Project';
$body = 'about';
    break;
        
 case 'people.php' :
$tittle = 'People page of our website Project';
$body = 'people';
    break;
        
 case 'daily.php' :
$tittle = 'Daily page of our website Project';
$body = 'daily';
    break;
        
 case 'contact.php' :
$tittle = 'Contact page of our website Project';
$body = 'contact';
    break;
        
 case 'gallery.php' :
$tittle = 'Gallery page of our website Project';
$body = 'gallery';
    break;
}