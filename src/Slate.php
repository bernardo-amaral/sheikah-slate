<?php

namespace bernardoamaral\sheikah;

class Slate
{
    function __construct() {
        #echo "Starting Sheikah Slate...\n";
    }

    public function order($elements = [])
    {
        sort($elements);
        return $elements;
    }

    public function sumValues(...$numbers)
    {
        $total = 0;
        foreach ($numbers as $n) {
            $total += $n;
        }
        return $total;
    }

}
