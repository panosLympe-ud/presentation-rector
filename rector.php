<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\LevelSetList;
use Rector\Set\ValueObject\SetList;
use PresentationRector\Legacy\CustomRenameRule;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/src',
    ])
    ->withSets([
        LevelSetList::UP_TO_PHP_84,
        SetList::CODE_QUALITY,
        SetList::TYPE_DECLARATION,
        SetList::DEAD_CODE,
        SetList::EARLY_RETURN,
    ])
    ->withRules([
        CustomRenameRule::class,
    ])
    ->withSkip([
//         __DIR__ . '/src/legacy/OldArraySyntax.php',
//         __DIR__ . '/src/legacy/DeprecatedEach.php',
//         __DIR__ . '/src/legacy/OldNullCheck.php',
//         __DIR__ . '/src/legacy/OldClosure.php',
//         __DIR__ . '/src/legacy/OldConstructor.php',
//         __DIR__ . '/src/legacy/OldNestedIf.php',
//         __DIR__ . '/src/legacy/OldDeadCode.php',
//         __DIR__ . '/src/legacy/OldTypeHints.php',
//         __DIR__ . '/src/legacy/CustomRenameRule.php',
    ]);
