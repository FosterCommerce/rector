<?php

declare(strict_types=1);

namespace fostercommerce\rector;

use Rector\Set\Contract\SetListInterface;

final class SetList implements SetListInterface
{
    /**
     * @var string
     */
    public const CRAFT_CMS_40 = __DIR__ . '/../sets/craft-cms-40.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_50 = __DIR__ . '/../sets/craft-cms-50.php';
}