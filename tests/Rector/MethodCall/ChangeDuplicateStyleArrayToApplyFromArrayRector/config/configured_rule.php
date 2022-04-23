<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPOffice\Rector\MethodCall\ChangeDuplicateStyleArrayToApplyFromArrayRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ChangeDuplicateStyleArrayToApplyFromArrayRector::class);
};
