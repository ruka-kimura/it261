<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Travel Calculator</title>
    <link href="css/styles2.css" type="text/css" rel="stylesheet">
 </head>

 <body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<label>NAME</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name'])  ;?>">

<label>Total miles driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles'])  ;?>">


<label>How fast do you typically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed'])  ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours'])  ;?>">

<label>Price of gas</label>
<ul>
<li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked" '  ;?>>$3.00</li>
<li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked" '  ;?>>$3.50</li>
<li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked" '  ;?>>$4.00</li>
</ul>


<label>Fuel efficiency</label>
<select name = "fuel">
<option value="" <?php if(isset($_POST['fuel']) && is_null($_POST['fuel']))  echo 'selected = "unselected"' ;?>>Select one</option>
<option value="40" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40' )  echo 'selected = "selected"' ;?>>Great @40mpg</option>
<option value="30" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30' )  echo 'selected = "selected"' ;?>>Good @30mpg</option>
<option value="20" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20' )  echo 'selected = "selected"' ;?>>Bad @20mpg</option>
<option value="10" <?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10' )  echo 'selected = "selected"' ;?>>Terrible @10mpg</option>
</select>


<input type="submit" value="Calculate">
<p><a href="">Reset</a></p>
</fieldset>
</form>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(empty($_POST['name'])){
        echo '<p class="error">Please fill out your Name</p>';
    }
    
    if(empty($_POST['miles'])){
        echo '<p class="error">Please fill out your total driving miles</p>';
    }
    
    if(empty($_POST['speed'])){
        echo '<p class="error">Please fill out how fast will you be driving</p>';
    }
    
    if(empty($_POST['hours'])){
        echo '<p class="error">How many hours per day would you like to drive?</p>';
    }

    if(empty($_POST['gas'])){
        echo '<p class="error">Your cost of gas, please!</p>';
    }
    
    if($_POST['fuel'] == NULL){
        echo '<p class="error">Please select your car\'s efficiency</p>';
    }

if(isset($_POST['name'],
 $_POST['miles'],
 $_POST['speed'],
 $_POST['hours'],
 $_POST['gas'],
 $_POST['fuel'])){
 $name = $_POST['name'];
 $miles = $_POST['miles'];
 $speed = floatval($_POST['speed']);
 $hours = floatval($_POST['hours']);
 $gas = $_POST['gas'];
 $fuel = $_POST['fuel'];
 $total_hours = $miles / $speed;
 $days = $total_hours / $hours;
 $gallons = $miles / $fuel;
 $gas_price = $gas * $gallons;

if(!empty($name && $miles && $speed && $hours && $gas && $fuel)){

//if(!empty($name && $email && $amount && $currency) && ($bank  != NULL)){


 echo '
 <div class ="box">
 <p>Hello '.$name.', you will be traveling a total of '.number_format($total_hours, 2).', taking '.number_format($days, 2).' days<br>And, you will be using '.$gallons.' gallons of gas, costing you $'.$gas_price.' dollars</p>

 </div>
 ';

}

}
}



?>

    
 </body>
 </html>