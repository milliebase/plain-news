<?php

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

if (isset($_GET['author'])) { //Checks which button is clicked

    $authorId = $_GET['author']; //Gets value from given button
    $articles = filteredAuthor($articles, $authorId);
}

usort($articles, 'sortDates'); //Sort the dates of the articles in descending order.

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Newsfeed</title>
    <link href='https://unpkg.com/sanitize.css' rel='stylesheet'>
    <link href='style.css' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:100,300,500,900&display=swap' rel='stylesheet'>
</head>
<body>

    <nav class='header'>

        <h1><a href="index.php">King's Landing Times</a></h1>

        <form action='' method='GET' class='menu'>

            <?php foreach ($authors as $i => $author) :

                $firstName = $author['firstName'];
                $lastName = $author['lastName'];
                $name = "$firstName $lastName";

            ?>

                <button class="authorBtn" type='submit' name='author' value='<?php echo $i; ?>'>
                        <?php echo "$name"; ?>
                </button>

            <?php endforeach; ?>

        </form>

    </nav>
