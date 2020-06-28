<?php
/*
$x = 0;
while ($x<10) {
    if (($x % 2) == 0) {
        $x ++;
    }else {
        $x += 4;
    }
}
echo $x; */

for ($c=0; $c<=10; $c++) {
    if (($c%2 ) == 0) {
        echo $c.'<br>';
    }else {
        echo 'False<br>';
    }
}