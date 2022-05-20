<?php
class Counter
{
    static $count = 0;

    public static function counter()
    {
        echo "The next value is: " . ++self::$count . "\n";
    }
}
Counter::counter();
Counter::counter();
Counter::counter();
