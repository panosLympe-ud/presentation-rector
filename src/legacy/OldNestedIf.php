<?php

namespace PresentationRector\Legacy;

class OldNestedIf
{
    public function process(?string $name): void
    {
        if ($name !== null) {
            if (trim($name) !== '') {
                echo "Hello, $name";
            }
        }
    }
}
