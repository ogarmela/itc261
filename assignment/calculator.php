<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Our Calculator</title>

</head>

<body>
     
<form action="" method="post">
    <fieldset>
        <p><label><b>How Many miles you will be driving:</b></label>
    <p><b>Price Per Gallon:</b> 
    <li> <input type="radio" name="gallon_price" value="3.00"/>3.00</li>
    <li> <input type="radio" name="gallon_price" value="3.50"/>3.50</li>
     <li> <input type="radio" name="gallon_price" value="4.00"/>4.00</li>
    </p>
        <ul>
    <p>
        <label><b>Fuel Efficiency:</b></label>  
    <select name="efficiency">
    <option value="10">Terrible</option>
    <option value="20">Good</option>
     <option value="30">Very Good</option>
    <option value="50">Excellent</option>
    </select></p>
            </ul>
     <p><input type="submit" name="submit" value="Calculate!" /></p>
     <p><a href="">Reset</a></p>
        </fieldset>
    
    <?php   
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if(empty($_POST['distance'])) {
        echo '<p>How Many miles will you bill driving<p/>'  ;  
    }
        if(empty($_POST['efficiency'])) {
        echo '<p>vehicle efficiency per gallow</p>'  ;
        }
        
        if(empty($_POST['gall_price']) || !is_numeric($_POST['gallow_price'])) {
        echo '<p>show me the price dollar!!!!</p>' ;    
        }
        
        if(isset($_POST['distance'],
                $_POST['efficiency'],
                $_POST['gallow_price']) &&
            is_numeric($_POST['gallow_price']) 
          ) {
              
    $gallons = $_POST['distance'] / $_POST['efficiency'];
    $dollars = $gallons * $_POST['gallon_price'];
        
        echo '<div class="box">'; 
        echo '<h2>Hello '.$gallow.'</h2>';
        echo '<p> '.$dollar.'</p>';
        echo '</div>';  
        }
                
    } 
    
    ?>
</form>
</body>
</html>

