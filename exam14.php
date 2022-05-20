<?php

define('NUM1', 10);
define('NUM2', 20);
define('RATE', 0.92);


echo NUM1 + NUM2 ."\n";
echo NUM1 - NUM2 ."\n";
$sum = NUM1 + NUM2;

function convertDollars2Euros($dollars)
{
    return $dollars * RATE;
}

echo convertDollars2Euros(100);