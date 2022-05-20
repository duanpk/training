<?php

namespace Assignment\Assignment4;

define('USD2EURO', 0.93);

trait Utils
{
    public function convert($amount)
    {
        return $amount * USD2EURO;
    }
}
