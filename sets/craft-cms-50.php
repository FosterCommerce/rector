<?php

declare(strict_types=1);

use craft\rector\SetList as CraftSetList;
use Rector\Config\RectorConfig;

return static function(RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/common.php');
    $rectorConfig->sets([
        CraftSetList::CRAFT_CMS_50,
    ]);
};
