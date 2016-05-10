<?php
/**
 * @var boolean $debugMode
 */

use Carbon\Carbon;

/* Filters out future weeks */
$weekCount = ceil(((new Carbon())->diffInWeeks(new Carbon('2015-12-21')) + 1) / 2);

if ($debugMode) {
    $weekCount = 30;
}

if ((new Carbon())->gt(new Carbon('2015-12-26'))) {
for($weekIndex = min($weekCount, 30); $weekIndex >= 0; $weekIndex--) {
?>
@include('challenges/week' . $weekIndex, ['weekIndex' => $weekIndex])
<?php
}
} else { /* Before Christmas -> ascending order */
?>
@include('challenges/week0', ['weekIndex' => 0])
@include('challenges/week1', ['weekIndex' => 1])
<?php
}