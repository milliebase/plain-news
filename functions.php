<?php

declare(strict_types=1);

/**
 * Callback function for usort and sorts the dates in descending order.
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function sortDates (array $a, array $b): bool
{
    return strtotime($a['published']) < strtotime($b['published']);
};

/**
 * Gives a new array of items by given id
 *
 * @param array $items
 * @param integer $id
 * @return array
 */
function filteredAuthor (array $items, int $id): array
{
        $items = array_filter($items, function($item) use ($id) {
            return $item['authorId'] === $id ;
        });

        return $items;
};
