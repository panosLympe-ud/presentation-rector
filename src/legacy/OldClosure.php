<?php

namespace PresentationRector\Legacy;

class OldClosure
{
    public function doubleNumbers(array $numbers): array
    {
        return array_map(function ($n) {
            return $n * 2;
        }, $numbers);
    }
}
