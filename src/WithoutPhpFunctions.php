<?php
/*
    This is the simplest solution I could think of.
    On another hand, it can not handle duplicate in any array.
    It works with the original arrays you provided.
*/

// $l1 = [0, 2, 1, 3, 8, 5, 4];
// $l2 = [1, 2, 7, 4, 10];

// $results = []; 
// foreach($l1 as $eleml1) {
//     foreach($l2 as $eleml2) {
//         if($eleml1 = $eleml2) {
//             $results[] = $eleml1;
//         }
//     }
// }

/****************************************************************************/

/*
    This solution can handle duplicates in both arrays.
*/

$l1 = [0, 2, 1, 3, 8, 5, 4, 2];
$l2 = [1, 2, 7, 4, 10, 2];

$results = [];
foreach ($l1 as $eleml1) {
    $isInArray = false;
    foreach ($l2 as $keyl2 => $eleml2) {
        if ($eleml1 === $eleml2) {
            if (false === $isInArray) {
                $results[] = $eleml1;
            }
            unset($l2[$keyl2]);
            $isInArray = true;
        }
    }
}

echo '';
var_dump($results);
echo PHP_EOL;
