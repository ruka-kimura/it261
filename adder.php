
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <title>My Adder Assignment</title>
   <meta charset="UTF-8">
    <style>
        p{
            color:red;
            text-align:center;

        }

        h1{
            color:green;
        }

        h2{
            font-size:1.5em;
            text-align:center;

        }

        form{
            width:350px;
            margin:0 auto;
            border:1px solid red;
            padding:10px;
        }

        h1{
            text-align:center;

        }
    </style>

</head>
<body>
<h1>Adder.php</h1> 
<!--corrected </form> to <form>-->
<form action="adder.php" method="post">
<!--add method="post"-->
<label>Enter the first number:</label><input type="text" name="num1"><br>
<!--add lavel tag and changed Num1 to num1-->
<label>Enter the second number:</label><input type="text" name="num2"><br>
<!--add opening and closing lavel tag-->
<input type="submit" value="Add Em!!"> </form>
<!--missing doble quote after Add Em!!-->

<?php     //adder-wrong.php

if (isset($_POST['num1'],
$_POST['num2'])){


if (empty($_POST['num1']&&
$_POST['num2'])){
echo '<p>Please fill out your numbers</p>';
exit;
}else{

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal = $num1 + $num2;

}
echo '<h2>You added '. $num1 .' and '.$num2.'</h2>';
echo '<p> and the answer is <span style="color:red;">'.$myTotal .'!</span></p>';
echo '<p><a href="">Reset page</a></p>';
}
?>




</body>
</html>

<!--Fixed incorrect operator(-=)-->
<!--Line5: Changed $Num2 to $num2 to match the variable-->
<!--Line7:Fixed incorrect use of double quotes and add </h2>-->
<!--Line9: Fixed incorrect use of double quotes-->
<!--Line10: Added </p> and semicolon-->

