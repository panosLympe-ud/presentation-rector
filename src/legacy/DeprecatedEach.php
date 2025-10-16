<?php

namespace PresentationRector\Legacy;

class DeprecatedEach
{
    public function run(): void
    {
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        while (list($key, $val) = each($array)) {
            echo "$key => $val" . PHP_EOL;
        }
    }
}
