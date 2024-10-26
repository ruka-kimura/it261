<?php

// far = ($celcius * 9/5) + 32


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style>
        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }

    table{
        width:500px;
        margin:20px auto;
        border-collapse:collapse;
        border:1px solid lightblue;
    }

    td, th{
        border:1px solid lightblue;
        border-collapse: collapse;
        padding:5pz;
    }

    h1, h2{
        text-align:center;
        margin: 10px 0,
        color:green;
    }
    </style>
 </head>
 <body>
    <h1>My Celcius / Fahrenheit Table!</h1>
<table>
<tr>
    <th>Celcius</th>
    <th>Fahrenheit</th>
</tr>
<?php
for ($cel = 0; $cel <= 100; $cel += 3){
$far = ($cel * 9/5) + 32;
echo '<tr>';
echo'<td> '.$cel.' degrees </td>';
echo'<td> '.$far.' degrees </td>';
echo'</tr>';
}
?>

<table>

<h2> Kilometer/Miles Table</h2>

<table>
<tr>
    <th>Kilometer</th>
    <th>Miles</th>
</tr>
<?php
for ($mile = 0; $mile <= 100; $mile += 5){
$kilo = number_format($mile * 1.609344, 2);
echo '<tr>';
echo'<td> '.$mile.' miles </td>';
echo'<td> '.$kilo.' kilometers </td>';
echo'</tr>';
}
?>

<table>



 </body>
 </html>