<?php

namespace Algorithms\Sort;

abstract class Sort
{
    private $arr;

    public function __construct(array $arr = [])
    {
        $this->arr = $arr;
    }

    public function getArr()
    {
        return $this->arr;
    }

    public function setArr(array $arr)
    {
        $this->arr = $arr;
    }

    public function printArr()
    {
        echo implode(', ', $this->arr) . PHP_EOL;
    }

    public static function swap(&$arr, $i, $j)
    {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $tmp;
    }

    abstract public static function sort($arr);

    public static function sortRecursive($arr, $start = 0, $end = null)
    {
    }
}
