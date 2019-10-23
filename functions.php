<?php

declare(strict_types=1);

/**
 * Checks if both arrays have a common value (id)
 * and returns the belonging name from the second array.
 *
 * @param array $article
 * @param array $people
 * @return string
 */
function getName(array $article, array $people): string
{
    $articlePersonId = $article['authorId'];

    foreach ($people as $person) {
        $id = $person['id'];
        $name = $person['name'];

        if ($id === $articlePersonId) {
            return $name;
        }
    }
};
