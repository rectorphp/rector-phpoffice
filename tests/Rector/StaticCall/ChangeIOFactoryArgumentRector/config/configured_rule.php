<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPOffice\Rector\StaticCall\ChangeIOFactoryArgumentRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ChangeIOFactoryArgumentRector::class);
};
