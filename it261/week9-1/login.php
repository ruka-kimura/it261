<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);


include('server.php');
include('./includes/header.php');
?>
<div id="wrapper">
<h1>Our Login Page!</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
<fieldset>

<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ;?>">

<label>Password</label>
<input type="password" name="password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ;?>">

<button type="submit"  name="login_user" class="btn">Login!</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>'">Reset</button>


</fieldset>
</form>


<p class="center">Not a member? <a href="register.php">Please register here!</a></p>

<?php
include('errors.php'); ?>

</div>

<?php include('./includes/footer.php');
