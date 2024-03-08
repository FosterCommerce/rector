<?php

declare(strict_types=1);

use Rector\CodingStyle\Rector\Encapsed\EncapsedStringsToSprintfRector;
use Rector\Config\RectorConfig;
use Rector\Naming\Rector\Assign\RenameVariableToMatchMethodCallReturnTypeRector;
use Rector\Naming\Rector\ClassMethod\RenameParamToMatchTypeRector;
use Rector\Naming\Rector\ClassMethod\RenameVariableToMatchNewTypeRector;
use Rector\Set\ValueObject\SetList;

return static function(RectorConfig $rectorConfig): void {
    $rectorConfig->parallel();
    $rectorConfig->sets([
        SetList::PHP_81,
        SetList::PHP_80,
        SetList::PHP_74,
        SetList::PHP_73,
        SetList::PHP_72,
        SetList::PHP_71,
        SetList::PHP_70,
        SetList::PHP_56,
        SetList::PHP_55,
        SetList::PHP_54,
        SetList::PHP_53,
        SetList::PHP_52,
        SetList::CODE_QUALITY,
        SetList::CODING_STYLE,
        SetList::DEAD_CODE,
        SetList::STRICT_BOOLEANS,
        SetList::NAMING,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN,
        SetList::INSTANCEOF,
    ]);

    $rectorConfig->skip([
        EncapsedStringsToSprintfRector::class,
        RenameParamToMatchTypeRector::class,
        RenameVariableToMatchNewTypeRector::class,
        RenameVariableToMatchMethodCallReturnTypeRector::class,
    ]);
};
