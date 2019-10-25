<?php

declare(strict_types=1);

require __DIR__.'/data.php';

/**
 * Sort the dates in descending order.
 *
 * @param array $a
 * @param arrray $b
 * @return integer
 */
function sortDates (array $a, array $b): int
{
    return strtotime($b['published']) - strtotime($a['published']);
};
