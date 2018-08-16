<?php

namespace bernardoamaral\sheikah;

class Slate
{
    function __construct() {
        echo "Starting Sheikah Slate...\n";
    }

    public function order($elements = [])
    {
        return sort($elements);
    }

}
