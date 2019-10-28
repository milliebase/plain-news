<?php

declare(strict_types=1);

/**
 * Callback function for usort and sort the dates in descending order.
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function sortDates (array $a, array $b): bool
{
    return strtotime($a['published']) < strtotime($b['published']);
};
