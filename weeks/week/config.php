<?php // config.php

// this will beour config file that we will link to the credentials.php
ob_start(); // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE'); // we want to see our errors

include('credentials.php');

















function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
