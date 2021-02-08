<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Calculator</title>

</head>

<body>
     
<form action="" method="post">
    <fieldset>
        <label>name</label>
        <input type="text" name="name">
        <label><b>How Many miles you will be driving:</b></label>
        <input type="text" name="distance"> 
    <label><b>Price Per Gallon:</b></label>
        <ul>
    <li> <input type="radio" name="gallon_price" value="3.00"/>3.00</li>
    <li> <input type="radio" name="gallon_price" value="3.50"/>3.50</li>
     <li> <input type="radio" name="gallon_price" value="4.00"/>4.00</li>
    </ul>
        
   <label><b>Fuel Efficiency:</b></label>  
    <select name="efficiency">
    <option value="NULL">select one</option>
    <option value="10">Terrible</option>
    <option value="20">Good</option>
     <option value="30">Very Good</option>
    <option value="50">Excellent</option>
    </select>
        
     <input type="submit" name="submit" value="Calculate!" />
     <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    
    <?php   
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['distance'])) {
        echo '<p>How Many miles will you bill driving<p/>'  ;  
    }
        if($_POST['efficiency'] == 'NULL') {
            echo '<p>please choose efficiency</p>' ;
        }
        
        if(empty($_POST['gallon_price'])) {
        echo '<p>show me the price dollar!!!!</p>' ;  
            
        }
        
        if(isset($_POST['distance'],
                $_POST['efficiency'],
                $_POST['gallon_price']) 
          ) {

        $distance = $_POST['distance'];
        $gallon_price =   $_POST['gallon_price'];
        $efficiency =    $_POST['efficiency'];
              
        $gallons =  $distance / $efficiency;
         $dollars = $gallons * $gallon_price;
        
        echo '<div class="box">'; 
        echo '<h2>Hello '.$gallon.'</h2>';
        echo '<p> '.$dollar.'</p>';
        echo '</div>';  
        }
                
    } // end rquest method
    
    ?>
</body>
</html>

