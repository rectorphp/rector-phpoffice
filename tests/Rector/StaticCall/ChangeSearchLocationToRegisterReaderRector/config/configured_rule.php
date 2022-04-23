<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\PHPOffice\Rector\StaticCall\ChangeSearchLocationToRegisterReaderRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->rule(ChangeSearchLocationToRegisterReaderRector::class);
};
