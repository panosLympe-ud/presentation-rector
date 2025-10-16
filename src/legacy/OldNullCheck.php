<?php

namespace PresentationRector\Legacy;

class OldNullCheck
{
    public function getUsername(?string $name): string
    {
        $username = isset($name) ? $name : 'Guest';
        return $username;
    }
}
