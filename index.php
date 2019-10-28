<?php

require __DIR__.'/header.php';

?>

<section class="container">

    <?php foreach ($articles as $i => $article) :?>

        <?php
            $title = $article['title'];
            $text = $article['content'];
            $portrait = $authors[$article['authorId']]['portrait'];
            $date = $article['published'];
            $likes = $article['likes'];
            $class = $authors[$article['authorId']]['class'];

            $firstName = $authors[$article['authorId']]['firstName'];
            $lastName = $authors[$article['authorId']]['lastName'];
            $name = "$firstName $lastName";
        ?>

        <article id="<?php echo $i?>">

                <div class="newsTxt">
                    <h2><?php echo $title; ?></h2>
                    <h3 class="date">Published: <?php echo $date; ?></h3>
                    <p class="text"><?php echo $text; ?></p>
                    <button class="likeBtn <?php echo $class; ?>"><span><?php echo $likes; ?></span> likes</button>
                </div>

                <div class="info <?php echo $class ?>">
                    <h3 class="author">Written by <br><?php echo $name; ?></h3>
                    <img src="<?php echo $portrait; ?>" alt="<?php echo $name?>">
                </div>

        </article>

    <?php endforeach; ?>
</section>


<script src="main.js"></script>

<?php

require __DIR__.'/footer.php';

?>
