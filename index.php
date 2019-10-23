<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

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
</head>
<body>
    <div class="container">
        <?php foreach ($articles as $article) :?>
        <article>
            <h1><?php echo $article['title']; ?></h1>
            <p class="date"><?php echo $article['published'] ?></p>
            <p class="content"><?php echo $article['content']; ?></p>
            <p class="author"><?php echo $article['author_id']; ?></p>
            <button class="likes"><?php echo $article['likes'] ?></button>
        </article>
        <?php endforeach; ?>
    </div>
</body>
</html>
