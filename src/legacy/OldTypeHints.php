<?php

namespace PresentationRector\Legacy;

class OldTypeHints
{
    /**
     * @param string $name
     * @param int $age
     * @return string
     */
    public function getInfo($name, $age)
    {
        return $name . ' is ' . $age . ' years old.';
    }
}
