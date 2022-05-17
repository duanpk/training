<?php

/**
 * output odd numbers between 1 and 10 to screen
 *
 * @return  void  no return
 */
function outputOddNumber()
{
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 1) {
            echo $i . "\n";
        }
    }
}

/**
 * check if a number is prime
 *
 * @param   int  $n  number to check
 *
 * @return  bool      true if prime, false otherwise
 */
function isPrime($n)
{
    if ($n < 2) {
        return false;
    }
    if ($n != 2 && $n % 2 == 0) {
        return false;
    }
    for ($i = 3; $i <= ceil(sqrt($n)); $i += 2) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
$a = [4, 5, 6, 99, 100, 50];
echo "prime numbers: ";
foreach ($a as $value) {
    if (isPrime($value)) {
        echo "$value ";
    }
}

/**
 * find all number that greater than 10
 *
 * @param   array  $numbers  array of numbers
 *
 * @return  array            array of numbers that greater than 10
 */
function findNumberGreaterThan10(...$numbers)
{
    $res = [];
    foreach ($numbers as $number) {
        if ($number > 10) {
            $res[] = $number;
        }
    }
    return $res;
}


/**
 * find n-th Fibonacci number
 *
 * @param   int  $n  n-th number
 *
 * @return  int      n-th Fibonacci number
 */
function fibonacci($n)
{
    if ($n < 2) {
        return $n;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}
