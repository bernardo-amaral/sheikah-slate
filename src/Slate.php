<?php

namespace bernardoamaral\sheikah;

class Slate
{
    function __construct() {
        #echo "Starting Sheikah Slate...\n";
    }

    /**
     *
     * @param array $elements
     * @return array
     */
    public function order($elements = []): array
    {
        sort($elements);
        return $elements;
    }

    /**
     *
     * @param integer ...$numbers
     * @return integer
     */
    public function sumValues(int ...$numbers): int
    {
        $total = 0;
        foreach ($numbers as $n) {
            $total += $n;
        }
        return $total;
    }

    /**
     *
     * @param integer ...$numbers
     * @return integer
     */
    public function subtractValues(int ...$numbers): int
    {
        $total = 0;
        if (isset($numbers[0])) {
            $total = $numbers[0];
            unset($numbers[0]);
            foreach ($numbers as $n) {
                $total -= $n;
            }
        }
        return $total;
    }

}
