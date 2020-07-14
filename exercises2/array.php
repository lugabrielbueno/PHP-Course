<?php

$pairs = array();
$odds = array();
$numbers = array();


for ($x = 0; $x<=100; $x++) {
    array_push($numbers,$x);
    if ($x%2 == 0) {
        array_push($pairs,$x);
    }else {
        array_push($odds,$x);
    }
}

foreach ($pairs as $pair) {
    echo $pair.',';
}
echo "\n";
foreach ($odds as $odd) {
    echo $odd.',';
}
echo "\n";
foreach ($numbers as $number) {
    echo $number.',';
}
?>