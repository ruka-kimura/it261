<?php

$errors = array();

ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();

include('config.php');
$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

if(isset($_POST['reg_user'])){

    $first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
    $email = mysqli_real_escape_string($iConn, $_POST['email']);
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
    $password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

    if(empty($first_name)){
        array_push($errors, 'First name is required');
    }

    if(empty($last_name)){
        array_push($errors, 'Last name is required');
    }

    if(empty($email)){
        array_push($errors, 'Email is required');
    }

    if(empty($username)){
        array_push($errors, 'Username is required');
    }

    if(empty($password1)){
        array_push($errors, 'Password is required');
    }

    if($password1 !== $password2){
        array_push($errors, 'Passwords do not match!');
    }

    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));
    $rows = mysqli_fetch_assoc($result);

    if($rows){
        if($rows['username'] == $username){
            array_push($errors, 'Username already exists!');
        }
        if($rows['email'] == $email){
            array_push($errors, 'Email already exists!');
        }
    }

    if(count($errors) == 0){
        $password = md5($password1);

        $query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password')";
        mysqli_query($iConn, $query);

        $_SESSION['username'] = $username;
        $_SESSION['success'] = 'You are now registered and logged in.';

        header('Location: login.php');
        exit;
    }
}

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)){
        array_push($errors, 'Username is required');
    }

    if(empty($password)){
        array_push($errors, 'Password is required');
    }

    if(count($errors) == 0){
        $password = md5($password);

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($iConn, $query);

        if(mysqli_num_rows($results) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['success'] = 'You are now logged in.';

            header('Location: index.php');
            exit;
        } else {
            array_push($errors, 'Wrong username/password combo!');
        }
    }
}

?>
