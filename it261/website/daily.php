<?php
include('config.php');
include('./includes/header.php');?>

<div id="wrapper">



<main>
<h1>Welcome to our daily page!</h1>
<p>Chapter too parties its letters nor. Cheerful but whatever ladyship disposed yet judgment. Lasted answer oppose to ye months no esteem. Branched is on an ecstatic directly it. Put off continue you denoting returned juvenile. Looked person sister result mr to. Replied demands charmed do viewing ye colonel to so. Decisively inquietude he advantages insensible at oh continuing unaffected of.
</p>

<h2 class="<?php echo $actDay; ?>"><?php echo $day; ?></h2>
<p><?php echo $details; ?></p>
<h2>Don't see your favorite movie? Check out the days below!</h2>



<ul>
    <li><a style="color:<?php
    if ($today == 'Sunday'){
        echo 'orange';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Sunday">Sunday</a></li>

    <li><a style="color:<?php
    if ($today == 'Monday'){
        echo 'green';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Monday">Monday</a></li>

    <li><a style="color:<?php
    if ($today == 'Tuesday'){
        echo 'black';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Tuesday">Tuesday</a></li>

    <li><a style="color:<?php
    if ($today == 'Wednesday'){
        echo 'yellow';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Wednesday">Wednesday</a></li>

    <li><a style="color:<?php
    if ($today == 'Thursday'){
        echo 'brown';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Thursday">Thursday</a></li>

    <li><a style="color:<?php
    if ($today == 'Friday'){
        echo 'white';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Friday">Friday</a></li>

    <li><a style="color:<?php
    if ($today == 'Saturday'){
        echo 'red';
    } else {
        echo 'blue';
    } ; ?>" href="daily.php?
    today=Saturday">Saturday</a></li>


</main>

<aside style="position: absolute; top: 180px; right: 10px;">
    <img src="<?php echo $picture; ?>" alt="<?php echo $altTag; ?>" style="max-width: 60%; height: auto;">
</aside>


</div>
<!-- end wrapper-->

<?php
include('./includes/footer.php');