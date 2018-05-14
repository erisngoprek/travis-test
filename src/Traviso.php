<?php

namespace Eristemena;

class Traviso
{
    public function __construct()
    {

    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function substract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function isEven($a)
    {
        return $a % 2 == 0;
    }
}