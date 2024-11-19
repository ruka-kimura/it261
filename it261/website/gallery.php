<?php

include('config.php');
include('./includes/header.php');


// Sample data to demonstrate substr() and str_replace()
$images = [
    "images/dog1.jpg",
    "images/dog2.jpg",
    "images/dog3.jpg",
    "images/dog4.jpg"
];

$words1 = [
    "Golden Retriever",
    "Poodle",
    "Shiba",
    "Corgi"
];

$words2 = [
    "The Golden Retriever is a Scottish breed of retriever dog of medium size.",
    "The Poodle, called the Pudel in German and the Caniche in French, is a breed of water dog.",
    "The Shiba Inu is a breed of hunting dog from Japan.",
    "The Welsh Corgi is a small type of herding dog that originated in Wales."
];

// Loop through the images and words
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <style>
        body{
            background-color: #ADD8E6;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        td, th {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        img {
            width: 150px;
            height: auto;
        }
        .truncate {
            max-width: 300px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
</head>
<body>

    <h1>Gallery of Dog Breeds</h1>

    <table>
        <tr>
            <th>Image</th>
            <th>Breed</th>
            <th>Description</th>
        </tr>

        <?php
        for ($i = 0; $i < count($images); $i++) {
            // Example of using substr() to limit the length of the words
            $word1 = substr($words1[$i], 0, 25); // Get the first 25 characters for word1
            $word2 = substr($words2[$i], 0, 100); // Get the first 100 characters for word2

            // Truncate the words for word2 and make it more readable by using ellipsis if it's too long
            $word2 = (strlen($words2[$i]) > 100) ? substr($words2[$i], 0, 100) . "..." : $words2[$i];
            ?>

            <tr>
                <td><img src="<?php echo $images[$i]; ?>" alt="Image of <?php echo $word1; ?>"></td>
                <td><?php echo $word1; ?></td>
                <td class="truncate"><?php echo $word2; ?></td>
            </tr>

            <?php
        }
        ?>

    </table>

</body>
</html>


<?php
include('./includes/footer.php'); ?>