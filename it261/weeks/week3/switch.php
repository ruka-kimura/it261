<?php

/* $variable = 'This is our variable';
if(isset($variable)){
    echo 'Variable has been set';
} else 
echo 'Variable has not been set!'; */

/* if(isset($_GET['today'])){
    echo 'Today has been set';
} else {
    echo 'NOT!!!!!!!!!!';
} */

if(isset($_GET['today'])){
    $today = $_GET['today'];

} else {
    $today = date('l');
}

switch($today){
    case 'Friday':
    $coffee = '<h2>Friday is our Vanilla Latte Day!</h2>';
    $pic = 'vanilla.jpg';
    $alt = 'Vanilla Latte';
    $content ='<p><b>A vanilla latte</b> is a classic latte, one of the first to appear at Starbucks. It is made with full-bodied espresso, creamy steamed milk and classic vanilla syrup.</p>';
break;

case 'Saturday':
    $coffee = '<h2>Saturday is our Green Tea Latte Day!</h2>';
    $pic = 'greentea.jpg';
    $alt = 'Green Tea Latte';

    $content ='<p><b>A green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';

    break;

    case 'Sunday':
        $coffee = '<h2>Sunday is our Caramel Latte Day!</h2>';
        $pic = 'caramel.jpg';
        $alt = 'Caramel Latte';
    
        $content ='<p><b>A caramel latte</b> is a latte that caramel syrup or sauce is mixed into the steamed milk before pouring it over the espresso, resulting in a sweeter and creamier beverage compared to an unflavored latte.</p>';

    break;

    case 'Monday':
        $coffee = '<h2>Monday is our Mocha Latte Day!</h2>';
        $pic = 'mocha.jpg';
        $alt = 'Mocha Latte';
        
        $content ='<p><b>A mocha latte</b> is a variant of a latte, in the sense that it is often 1/3 espresso and 2/3 steamed milk.</p>';
        
    break;

    
    case 'Tuesday':
        $coffee = '<h2>Tuesday is our Cinnamon Latte Day!</h2>';
        $pic = 'cinnamon.jpg';
        $alt = 'Cinnamon Latte';
            
        $content ='<p><b>A cinnamon latte</b> a delightful and warming beverage becoming increasingly popular in coffee. Not just for its taste, this spiced latte also contains several natural health benefits due to its main ingredient; cinnamon.</p>';
            

    break;

    case 'Wednesday':
        $coffee = '<h2>Wednesday is our Hojicha Latte Day!</h2>';
        $pic = 'hojicha.jpg';
        $alt = 'hojicha Latte';
            
        $content ='<p><b>A hojicha latte</b> is a tea latte made from Japanese roasted green tea (hojicha), water, and milk.</p>';

    break;


        case 'Thursday':
            $coffee = '<h2>Thursday is our Coconut Latte Day!</h2>';
            $pic = 'coconut.jpg';
            $alt = 'Coconut Latte';
                
            $content ='<p><b>A coconut latte</b> is a variation of the traditional latte made by replacing regular milk with coconut milk.</p>';
         
}


?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>

        *{
            padding:0;
            margin:0;
            box-sizing:border-box;
        }
        #wrapper{
            width:940px;
            margin:20px auto;

        }

        h1, h2{
            margin-bottom:20px;

        }

        img{
            margin-bottom:20px;
            width: 50%;
        }

        
    </style>
 </head>
 <body>
<div id ="wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>
<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>

</ul>




</div>

<!--
 </body>
 </html>