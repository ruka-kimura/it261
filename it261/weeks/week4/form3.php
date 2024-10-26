 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside my HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
 </head>
 <body>
    <h1>My form3.php</h1>
    <form action="" method="post">
    <fieldset>
    <label>First Name</label>
    <input type="text" name= "first_name">

    <label>Last Name</label>
    <input type="text" name= "last_name">

    <label>Email</label>
    <input type="text" name= "email">

    <label>Comments</label>
    <textarea name="comments"></textarea>

    <input type="submit" value="Send it!">
    <p><a href="">Reset!</a></p>

</fieldset>
</form>

<?php

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['comments'])) {


    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $comments = $_POST['comments'];

if(empty($_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])) {

    echo '<p class="error">Please fill out all of the fields!';
   
} else {
echo'
<div class="box">
<h2>Hello  '.$first_name.'  '.$last_name.'!</h2>
<p>We have received your <b>email as:</b> '.$email.' and will be reviewing your <b>comments:</b> '.$comments.'</p>
</div>

';


}




}



?>
 </body>
 </html>