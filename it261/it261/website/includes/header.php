<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>" style="background-color: <?php echo $background2; ?>;">


<header>
    <div class="inner-header">
        <a href="index.php">
            <img id="logo" src="images/logo.png" alt="logo">
    </a>
    <nav>
    <ul>
    <?php
    echo make_links($nav);


    ?>
    </ul>
    </nav>
    </div>
    <!-- end inner header -->

    
</header>
