<?php

echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';
date_default_timezone_get('America/Los_Angeles');

echo '<br>';
echo date('l, F j, Y h:i: A');

echo '<br>';

$name = 'Ruka';
$our_date = date('H:i A');
echo '<br>';
echo $our_time;

if($our_time <= 11){
    echo '<h2 style="color:yellow;">Good Morning,  '.$name.'</h2>
    <img src="./images/" alt="sun">
    <p>It\'s time to get up!</p>
    ';
} elseif ($our_time <= 17) {
    echo '<h2 style ="color:green;> Good Afternoon, '.$name.'</h2>';

} else {
    echo '<h2 style ="color:blue;">Good Evening, '.$name.'</h2>';

}