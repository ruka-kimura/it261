<form action="" method="post">
<?php

ob_start();

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$privacy = '';
$food = '';
$country = '';




$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$privacy_err ='';
$food_err = '';
$country_err = '';



 
 if($_SERVER['REQUEST_METHOD'] == "POST") {

    //if inputs are empty, we will declare a statement else we will assgn the $POSTs to a variable

if(empty($_POST['food'])){

$food_err = 'Please select a food you like';

} else {
    $food = $_POST['food'];
}

if(empty($_POST['first_name'])){
    $first_name_err = 'Please fill in your first name'; 

} else {
    $first_name = $_POST['first_name'];
}

if(empty($_POST['last_name'])){
    $last_name_err = 'Please fill in your last name'; 

} else {
    $last_name = $_POST['last_name'];
}


if(empty($_POST['email'])){
    $email_err = 'Please fill in your email'; 

} else {
    $email = $_POST['email'];
}

if(empty($_POST['country'])){
    $country_err = 'Please check your country'; 

} else {
    $country = $_POST['country'];
}

//if(empty($_POST['phone'])){
//    $phone_err = 'Please fill in your phone number'; 

//} else {
//    $phone = $_POST['phone'];
//}

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format!';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if





if(empty($_POST['privacy'])){
    $privacy_err = 'Please agree to our privacy policy'; 

} else {
    $privacy = $_POST['privacy'];
}



function my_food($food){
    $my_return = '';
    if(!empty($_POST['food'])){
        $my_return = implode(',', $_POST['food']);
    }
    return $my_return;

} //


if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['food'],
$_POST['phone'],
$_POST['country'],
$_POST['privacy'])
){

$to = 'szemeo@mystudentswa.com';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.'  '.PHP_EOL.'
Last Name: '.$last_name.'  '.PHP_EOL.'
Email: '.$email.'  '.PHP_EOL.'
Phone: '.$phone.'  '.PHP_EOL.'
Gender: '.$gender.'  '.PHP_EOL.'
Food: '.my_food($food).'  '.PHP_EOL.'
Country: '.$country.'  '.PHP_EOL.'



';

$headers = array(
    'From' => 'noreply@mystudentswa.com'
);
// we will be adding an if statement -that this email form will work ONLY if all the fields are filled out!!!
if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $phone &&
    $food &&
    $rcountry &&
    $phone) &&
    preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']) ){

    mail($to, $subject, $body, $headers);
    header('Location:https://web-students.net/site36/it261/website/thx.php');

} //end isset


} //closing server request method


} //closing server request method
 
 
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable form HW6</title>
    <link href ="css/styles2.css" type="text/css" rel="stylesheet">
 </head>
 <body>
    <h1>Emailable form HW6</h1>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>
<legend>
Contact Ruka
</legend>
<label>First Name</label>
<input type="text" name ="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">
<span><?php echo $first_name_err ;?></span>

<label>Last Name</label>
<input type="text" name ="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">
<span><?php echo $last_name_err ;?></span>


<label>Email</label>
<input type="email" name ="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">
<span><?php echo $email_err ;?></span>


<label>Phone</label>
<input type="tel" name="phone" placeholder ="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone']) ;?>">
<span><?php echo $phone_err ;?></span>


<label>Favorite Foods</label>

<ul>
<li><input type="checkbox" name="food[]" value="Sushi" <?php if(isset($_POST['food']) && in_array('Sushi', $food)) echo 'checked="checked"' ;?>>Sushi</li>
<li><input type="checkbox" name="food[]" value="Ramen" <?php if(isset($_POST['food']) && in_array('Ramen', $food)) echo 'checked="checked"' ;?>>Ramen</li>
<li><input type="checkbox" name="food[]" value="Taco" <?php if(isset($_POST['food']) && in_array('Taco', $food)) echo 'checked="checked"' ;?>>Taco</li>
<li><input type="checkbox" name="food[]" value="Burger" <?php if(isset($_POST['food']) && in_array('Burger', $food)) echo 'checked="checked"' ;?>>Burger</li>
<li><input type="checkbox" name="food[]" value="Pizza" <?php if(isset($_POST['food']) && in_array('Pizza', $food)) echo 'checked="checked"' ;?>>Pizza</li>

</ul>
<span><?php echo $food_err ;?></span>


<label>Country</label>
<select name="country">
<option value="" <?php if(isset($_POST['country']) && is_null($_POST['country'])) echo 'selected="unselected"';?>>Select One!</option>
<option value="nw" <?php if(isset($_POST['country']) && $_POST['country'] == "usa") echo 'selected="selected"';?>>USA</option>
<option value="sw" <?php if(isset($_POST['country']) && $_POST['country'] == "canada") echo 'selected="selected"';?>>Canada</option>
<option value="mw" <?php if(isset($_POST['country']) && $_POST['country'] == "mexico") echo 'selected="selected"';?>>Mexico</option>
<option value="ne" <?php if(isset($_POST['country']) && $_POST['country'] == "japan") echo 'selected="selected"';?>>Japan</option>
<option value="se" <?php if(isset($_POST['country']) && $_POST['country'] == "china") echo 'selected="selected"';?>>China</option>
</select>
<span><?php echo $country_err ;?></span>



<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy'])&& $_POST['privacy']=="yes") echo 'checked="checked"'   ;?>>Yes</li>
</ul>
<span><?php echo $privacy_err ;?></span>

<input type="submit" value="Send it">
<p><a href="">Reset</a></p>

</fieldset>
 </form>
    
 </body>
 </html> 


</form>