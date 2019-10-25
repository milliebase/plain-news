<?php
// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.

require __DIR__.'/data.php';
require __DIR__.'/functions.php';

usort($articles, "sortDates"); //Sort the dates of the articles.

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
        <?php foreach ($articles as $i => $article) :?>
        <article id="<?php echo $i; ?>">
            <h1><?php echo $article['title']; ?></h1>
            <h3 class="author"><?php echo $authors[$article['authorId']]['name'];?></h3>
            <h3 class="date"><?php echo $article['published'] ?></h3>
            <p class="content"><?php echo $article['content']; ?></p>
            <button class="likes"><?php echo $article['likes']; ?></button>
        </article>
        <?php endforeach; ?>
    </div>
</body>
</html>
