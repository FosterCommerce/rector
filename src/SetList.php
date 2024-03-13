<?php

declare(strict_types=1);

namespace fostercommerce\rector;

use Rector\Set\Contract\SetListInterface;

final class SetList implements SetListInterface
{
    /**
     * @var string
     */
    public const CRAFT_CMS_40 = __DIR__ . '/../sets/craft-cms-40-php-81.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_40_PHP_80 = __DIR__ . '/../sets/craft-cms-40-php-80.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_40_PHP_81 = __DIR__ . '/../sets/craft-cms-40-php-81.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_40_PHP_82 = __DIR__ . '/../sets/craft-cms-40-php-82.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_40_PHP_83 = __DIR__ . '/../sets/craft-cms-40-php-83.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_50 = __DIR__ . '/../sets/craft-cms-50-php-82.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_50_PHP_82 = __DIR__ . '/../sets/craft-cms-50-php-82.php';

    /**
     * @var string
     */
    public const CRAFT_CMS_50_PHP_83 = __DIR__ . '/../sets/craft-cms-50-php-83.php';
}