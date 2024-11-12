<?php

ob_start();


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our Website Project';
        $body = 'home';
        break;

    case 'about.php':
        $title = 'About page of our Website Project';
        $body = 'about inner';
        break;

    case 'daily.php':
        $title = 'Daily page of our Website Project';
        $body = 'daily inner';
        break;

    case 'project.php':
        $title = 'Project page of our Website Project';
        $body = 'project inner';
        break;

    case 'contact.php':
        $title = 'Contact page of our Website Project';
        $body = 'contact inner';
        break;

    case 'gallery.php':
        $title = 'Gallery page of our Website Project';
        $body = 'gallery inner';
        break;
}

// Our navigation array
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

function make_links($nav){
    $my_return = '';
    foreach($nav as $key => $value){
    if(THIS_PAGE == $key){
    $my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>';
    } else {
    $my_return .= '<li><a href="'.$key.'"> '.$value.'</a></li>';
    }
    
    } //end foreach
    return $my_return;
    
    }  //end function

// This is the beginning of the switch for homework 3
if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch ($today) {
    case 'Saturday':
        $actDay = 'red';
        $day = 'Saturday is the Devil Wears Prada Day';
        $details = 'Sporting silvery hair, a vast collection of fur coats, an encyclopedic knowledge of all things fashionable, and a killer smile, Miranda is full of wicked charm. With her mature beauty and commanding presence, Miranda is as fascinating to watch as she is intimidating to the constant rotation of assistants thrown her way. When bookish Northwestern grad Andy Sachs interviews to become Miranda\'s newest lackey, Miranda hires her not for her lackluster wardrobe but for her intellect. Inside the pristine Runway offices, Andy slowly finds herself seduced by the glamorous world of fashion and by Miranda herself. While Andy\'s transformation comes largely in the form of new designer clothing, the makeover is mental as well. What starts out as a firm belief in fashion\'s vapidity and in Miranda\'s heartlessness gradually fades into suspicion that the boss from hell might just be hiding a soul. Director David Frankel Star Anne Hathaway, Meryl Streep, Adrian Grenier Special Features: Widescreen Format, Commentary, Outtakes, Featurettes.';
        $picture = 'prada.jpg';
        $altTag = 'The Devil Wears Prada';
        $background2 = 'white';
        break;

    case 'Sunday':
        $actDay = 'blue';
        $day = 'Sunday is the Intern Day';
        $details = 'The Intern (2015), directed by Nancy Meyers, is a heartwarming comedy-drama starring Robert De Niro and Anne Hathaway. The film follows Ben Whittaker (De Niro), a 70-year-old widower who becomes an intern at a fast-growing e-commerce fashion company led by Jules Ostin (Hathaway), a young, driven CEO.';
        $picture = 'intern.jpg';
        $altTag = 'The Intern';
        $background2 = 'black';
        break;

    case 'Monday':
        $actDay = 'yellow';
        $day = 'Monday is Cruella Day';
        $details = 'During the 1970s London punk rock revolution, young grifter Estella transforms herself into the raucous, revenge-bent Cruella de Vil.';
        $picture = 'cruella.jpg';
        $altTag = 'Cruella';
        $background2 = 'gray';
        break;

    case 'Tuesday':
        $actDay = 'green';
        $day = 'Tuesday is Bohemian Rhapsody Day';
        $details = 'With his impeccable vocal abilities, Freddie Mercury and his rock band, Queen, achieve superstardom. However, amidst his skyrocketing success, he grapples with his ego, sexuality, and a fatal illness.';
        $picture = 'bohemian.jpg';
        $altTag = 'Bohemian Rhapsody';
        $background2 = 'pink';
        break;

    case 'Wednesday':
        $actDay = 'salmonpink';
        $day = 'Wednesday is Titanic Day';
        $details = 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.';
        $picture = 'titanic.png';
        $altTag = 'Titanic';
        $background2 = 'blood';
        break;

    case 'Thursday':
        $actDay = 'purple';
        $day = 'Thursday is COCO Day';
        $details = 'Aspiring musician Miguel, confronted with his family\'s ancestral ban on music, enters the Land of the Dead to find his great-great-grandfather, a legendary singer.';
        $picture = 'coco.jpg';
        $altTag = 'COCO';
        $background2 = 'lightblue';
        break;

    case 'Friday':
        $actDay = 'lightgreen';
        $day = 'Friday is Inside Out Day';
        $details = 'After young Riley is uprooted from her Midwest life and moved to San Francisco, her emotions - Joy, Fear, Anger, Disgust, and Sadness - conflict on how best to navigate a new city, house, and school.';
        $picture = 'insideout.jpg';
        $altTag = 'Inside Out';
        $background2 = 'orange';
        break;
}


//my form's php




$first_name = '';
$last_name = '';
$email = '';
$wines = '';
$phone = '';
$regions = '';
$gender = '';
$comments = '';
$privacy = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$wines_err = '';
$phone_err = '';
$regions_err ='';
$gender_err = '';
$comments_err = '';
$privacy_err = '';


 
 if($_SERVER['REQUEST_METHOD'] == "POST") {


if(empty($_POST['wines'])){

$wines_err = 'What...no wines?';

} else {
    $wines = $_POST['wines'];
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

if(empty($_POST['gender'])){
    $gender_err = 'Please check your gender'; 

} else {
    $gender = $_POST['gender'];
}

if(empty($_POST['phone'])){
    $phone_err = 'Please fill in your phone number'; 

} else {
    $phone = $_POST['phone'];
}


if(empty($_POST['comments'])){
    $comments_err = 'Please share your thoughts with us'; 

} else {
    $comments = $_POST['comments'];
}


if(empty($_POST['privacy'])){
    $privacy_err = 'Please agree to our privacy policy'; 

} else {
    $privacy = $_POST['privacy'];
}

if ($_POST['region'] == NULL){

    $regions_err = 'Please choose your region';
} else{
    $regions = $_POST['regions'];
}

function my_wines($wines){
    $my_return = '';
    if(!empty($_POST['wines'])){
        $my_return = implode(',', $_POST['wines']);
    }
    return $my_return;

}
} //end my_wine function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['wines'],
$_POST['regions'],
$_POST['comments'],
$_POST['privacy'])
){

$to = 'ron.ruka@gmail.com';
$subject = 'Test email on  '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.'  '.PHP_EOL.'
Last Name: '.$last_name.'  '.PHP_EOL.'
Email: '.$email.'  '.PHP_EOL.'
Gender: '.$gender.'  '.PHP_EOL.'
Wines: '.my_wines($wines).'  '.PHP_EOL.'
Regions: '.$regions.'  '.PHP_EOL.'
Phone: '.$phone.'  '.PHP_EOL.'
Comments: '.$comments.'  '.PHP_EOL.'


';

$headers = array(
    'From' => 'ron.ruka@gmail.com'
);
// we will be adding an if statement -that this email form will work ONLY if all the fields are filled out!!!
if(!empty(
    $first_name &&
    $last_name &&
    $email &&
    $gender &&
    $wines &&
    $regions &&
    $phone &&
    $comments)) {

    mail($to, $subject, $body, $headers);
    header('Location:thx.php');



} //end isset


} //closing server request method