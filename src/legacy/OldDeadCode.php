<?php

namespace PresentationRector\Legacy;

class OldDeadCode
{
    public function run(): void
    {
        if (false) {
            echo "This will never run";
        }

        return;

        echo "Unreachable code";
    }
}
