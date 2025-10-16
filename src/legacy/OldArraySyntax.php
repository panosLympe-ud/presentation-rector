<?php

namespace PresentationRector\Legacy;

class OldArraySyntax
{
    public function run(): void
    {
        $numbers = array(1, 2, 3, 4, 5);
        foreach ($numbers as $n) {
            echo $n . PHP_EOL;
        }
    }
}
