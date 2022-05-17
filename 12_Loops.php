<?php

// output 10 to 50 by 10
for ($i = 10; $i <= 50; $i += 10) {
    echo $i . "\n";
}

// output 10 to 50 by 10 using while loop
$i = 10;
while ($i <= 50) {
    echo $i . "\n";
    $i += 10;
}

// output 10 to 50 by 10 using do-while loop
$i = 10;
do {
    echo $i . "\n";
    $i += 10;
} while ($i <= 50);

/*
    * for ($i = 0; $i < 10; $i++) {
    *    echo "$i<br>";
    * }
    * Use 'break' to print number less than 3
*/
for ($i = 0; $i < 10; $i++) {
    if ($i >= 3) {
        break;
    }
    echo "$i\n";
}

// print even number less than 10
for ($i = 0; $i < 10; $i += 2) {
    echo "$i\n";
}

// print stars
$size = 5;
for ($i = 0; $i < $size+1; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "\n";
}
