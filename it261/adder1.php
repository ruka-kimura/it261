<?php     //adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;
//fixed incorrect operator(-=) and Changed $Num2 to $num2 to match the variable

echo '<h2>You added '. $num1 .' and '.$num2. '</h2>';
//fixed incorrect use of double quotes and add </h2>

echo ' <p> and the answer is <br>
<span style="color:red;">'. $myTotal .'!</span></p>';
//changed <style> to <spanstyle> and fixed incorrect use of double quotes

echo'<p><a href="">Reset page</a></p>';
//add semicolon
}

//add </p> and closing php tag
?>


<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> <\form action="">
Enter the first number:</label><input type="text" name="Num1"><br>
</label>Enter the second number:<input type="text" name="num2"><br>
<input type="submit" value="Add Em!!> </form>


