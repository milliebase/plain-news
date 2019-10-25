<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

usort($articles, "sortDates"); //Sort the dates of the articles in descending order.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsfeed</title>
    <link href='https://unpkg.com/sanitize.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Montserrat:100,300,500,900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="header">
        <h1>King's Landing Times</h1>

        <ul class="menu">
            <li>Jon Snow</li>
            <li>Arya Stark</li>
            <li>Sansa Stark</li>
            <li>Brienne of Tarth</li>
            <li>Tyrion Lannister</li>
        </ul>
    </nav>
