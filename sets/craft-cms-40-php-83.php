<?php

declare(strict_types=1);

use craft\rector\SetList as CraftSetList;
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;

return static function(RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/common.php');

    $rectorConfig->sets([
        SetList::PHP_81,
        SetList::PHP_82,
        SetList::PHP_83,
        CraftSetList::CRAFT_CMS_40,
        CraftSetList::CRAFT_COMMERCE_40,
    ]);
};
